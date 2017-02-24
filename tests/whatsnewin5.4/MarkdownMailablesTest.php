<?php

namespace Tests\Feature;

use App\Mail\Welcome;
use Illuminate\Mail\Transport\ArrayTransport;
use Mail;
use Swift_Mailer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MarkdownMailablesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMarkdownMail()
    {
        $user = factory(\App\User::class)->make();
        $welcome = new Welcome($user);
        Mail::to($user)->send($welcome);
        $swiftMail = Mail::getSwiftMailer()->getTransport()->messages()->first();
        $message = $swiftMail->toString();
        $this->assertContains('The body of your message.', $message);

    }


}

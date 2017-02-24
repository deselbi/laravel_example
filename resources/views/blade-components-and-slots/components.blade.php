@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="columns">

                <div class="col-md-4">
                    @include('partials.panel', [
                        'header' => 'Header Message'
                    ])
                </div>
                <div class="col-md-4">
                    @include('partials.panel', [
                        'header' => ' Different Header Message'
                    ])
                </div>

            </div>
        </div>
    </div>
@endsection

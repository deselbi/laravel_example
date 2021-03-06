@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="columns">

                <div class="col-md-4">
                    @component('partials.panel')
                        @slot('header')
                            Header Message
                        @endslot

                        @slot('body')
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        @endslot
                    @endcomponent
                </div>

                <div class="col-md-4">
                    @component('partials.panel')
                        @slot('header')
                            Different Header Message
                        @endslot

                        @slot('body')
                            different body
                        @endslot

                         default slot text
                    @endcomponent
                </div>

            </div>
        </div>
    </div>
@endsection

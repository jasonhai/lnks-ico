@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h2>Please read our documents carefully!</h2>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>
    <!-- Seen on section -->
    <section class="seenon_section bg-grey pt-20 pb-40">
        <div class="content">
            <div class="container doccument">
                <div class="row">
                    <div class="col-md-12">
                        <a class="primary btn-primary col-md-6" href="https://bit.ly/2JKJMsZ" target="_blank">Original Whitepaper</a>
                        <a class="primary btn-primary col-md-6" href="https://bit.ly/2LNtQJh" target="_blank">New Growth Stage Whitepaper</a>    
                    </div>

                    <div class="col-md-12">
                        <a class="primary btn-primary col-md-6" href="https://bit.ly/2Jq1uD2" target="_blank">Original Distribution Agreement</a>
                        <a class="primary btn-primary col-md-6" href="https://bit.ly/30rZDCD" target="_blank">New Growth Stage Distribution Agreement</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer --> 
    @include('partials.footer')   
    
@stop
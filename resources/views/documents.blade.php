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
    <section class="seenon_section bg-grey pt-120 pb-40">
        <div class="content">
            <div class="container doccument">
                <div class="row">
                    <table class="table-bordered">
                        <tbody>
                        <tr>
                            <th class="doc-title text-center" headers="blank">Original Whitepaper</th>
                            <th class="doc-title text-center" headers="blank">New Growth Stage Whitepaper</th>
                        </tr>
                        <tr>
                            <td><a href="https://bit.ly/2JKJMsZ" target="_blank">https://bit.ly/2JKJMsZ</a></td>
                            <td><a href="https://bit.ly/2LNtQJh" target="_blank">https://bit.ly/2LNtQJh</a></td>
                        </tr>
                        <tr>
                            <th class="doc-title text-center" headers="blank">Original Distribution Agreement</th>
                            <th class="doc-title text-center" headers="blank">New Growth Stage Distribution Agreement</th>
                        </tr>
                        <tr>
                            <td><a href="https://bit.ly/2Jq1uD2" target="_blank">https://bit.ly/2Jq1uD2</a></td>
                            <td><a href="https://bit.ly/30rZDCD" target="_blank">https://bit.ly/30rZDCD</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer --> 
    @include('partials.footer')   
    
@stop
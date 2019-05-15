@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h2>Welcome to Board Of Makers</h2>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>

    <!-- How it work section -->
    <section class="howitwork_section">
        <div class="content">
            <div class="container">
                <header class="text-center pt-60 headbg2 section-header">
                    <small>TEAM</small>
                    <h2>Together, we can do anything !!!<span class="background_heading_2">Together, we can do anything</span></h2>
                    <hr>
                    <!-- <p class="lead mb-0 pb-0">We waited until we could do it right. Then we did! It's time to grow together.</p> -->
                </header>

                <div class="row">
                    <div class="col-3 col-12-medium text-center">
                        <div class="avatar-content pb-20">
                            <a href="">
                                <img src="template/images/brian.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="">
                                    <h2 class="avatar-member-name">Brian Vo</h2>
                                </a>
                                <div class="avatar-member-position">
                                    Executive Board Advisor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-12-medium">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>I am blockchain researcher and business strategist with a passion for financial empowerment. I am also passionate about the intersection of finance and technology.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-12-medium text-center">
                        <div class="avatar-content pb-20">
                            <a href="">
                                <img src="template/images/jason.png">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="">
                                    <h2 class="avatar-member-name">Jason Hai</h2>
                                </a>
                                <div class="avatar-member-position">
                                    Senior LAMP Stack
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-12-medium">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Jason Hai has a lot of experience in PHP and Server. Technology is always change, He thinks that blockchain will be the best tool for any transactions in the near future.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-12-medium text-center">
                        <div class="avatar-content pb-20">
                            <a href="">
                                <img src="template/images/daniel.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="">
                                    <h2 class="avatar-member-name">Daniel Mendoza</h2>
                                </a>
                                <div class="avatar-member-position">
                                    CEO
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-12-medium">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>He has 6 years of experience in blockchain and crypto currency technology, the first thing he considered amazing about blockchain technology was its ability to truly change the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-12-medium text-center">
                        <div class="avatar-content pb-20">
                            <a href="">
                                <img src="template/images/kalos.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="">
                                    <h2 class="avatar-member-name">Karolis Ramanauskas</h2>
                                </a>
                                <div class="avatar-member-position">
                                    Lead Developer
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-12-medium">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Karolis Ramanauskas, a graduate of BSc Computer Science at Lancaster University. His current focus is on researching and understanding blockchains, and how they can be used for the most positive impact.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')   

@stop
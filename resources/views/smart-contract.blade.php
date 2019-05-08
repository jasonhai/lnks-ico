@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
<!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                    <h2>The future has landed</h2>
                    <p>And there are no hoverboards or flying cars.<br />
                    Just apps. Lots of mother flipping apps.</p>
                </header>
                <span class="image"><img src="template/images/pic01.png" alt="" /></span>
            </div>
            <a href="https://github.com/slvone?tab=repositories" class="goto-next scrolly">Next</a>
        </section>

       

        <!-- How it work section -->
        <!-- <section class="howitwork_section">
            <div class="content">
                <div class="container">
                    <header class="text-center pt-60 headbg2 section-header">
                        <small>Success Story</small>
                        <h2>We Can Do It Together<span class="background_heading_2">We Can Do It Together</span></h2>
                        <hr>
                        <p class="lead mb-0 pb-0">We waited until we could do it right. Then we did! It's time to grow together.</p>
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
                    
                </div>
            </div>
        </section> -->

    <!-- Five -->
        <section id="five" class="wrapper style2 special fade">
            <div class="container">
                <header>
                    <h2>Join our newsletter</h2>
                    <p>Drop your email address to receive all the information from SLV tean.</p>
                </header>
                <form method="post" action="{{ url('subscriber') }}" class="cta">
                    {{ csrf_field() }}
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-8 col-12-xsmall"><input type="email" required name="email" id="email" placeholder="Your Email Address" /></div>
                        <div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
                    </div>
                </form>
            </div>
        </section>

    <!-- Footer -->
        <footer id="footer">
            <div class="container pb-20 pt-30">
                <!-- <div class="row gap-y m-0 mb-30 fs-20 footer-contacts">
                    <div class="col-4 p-15 text-center col-md-4 ">
                        <i class="fa fs-40 mr-10 fa-phone" aria-hidden="true"></i>
                        <a class="phone" href="tel:+359886496592">+ 359 886 496 592</a>
                    </div>
                    <div class="col-4 p-15 text-center col-md-4">
                        <i class="fa fs-40  mr-10 fa-envelope-o" aria-hidden="true"></i>
                        <a href="support@cryptolink.network" target="_top">support@cryptolink.network</a>
                    </div>
                    <div class="col-4 p-15 text-center col-md-4">
                        <i class="fa fs-40 mr-10 fa-telegram" aria-hidden="true"></i>
                        <a href="https://t.me/gifcoin">Telegram</a>
                    </div>
                </div> -->

                <div class="nav m-0 row gap-y pt-10" style="border-top:1px solid #5d5d5d;margin:  0;">
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/01.Whitepaper_Original_version.pdf') }}">Whitepaper</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/03.Distribution_Agreement_Original_version.pdf') }}">Privacy Policy</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/') }}">Terms Of Use</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="mailto:pmhai90@gmail.com" target="_blank">Contact Us</a>

                </div>
             </div>
            <ul class="icons">
                <li><a href="https://twitter.com/slv_one" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://discord.gg/F8Kske8" class="icon alt fa-twitter"><span class="label">Discord</span></a></li>
                <li><a href="https://github.com/slvone" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="https://t.me/joinchat/HhaAjRQ3eQA_" class="icon alt fa-telegram"><span class="label">Telegram</span></a></li>
            </ul>
        </footer>
@stop
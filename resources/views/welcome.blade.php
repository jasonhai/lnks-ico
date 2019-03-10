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
                <span class="image"><img src="template/images/pic01.jpg" alt="" /></span>
            </div>
            <a href="#one" class="goto-next scrolly">Next</a>
        </section>

    <!-- video -->
        <section id="videos" class="pt-40 pb-80">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-12-medium">
                            <h4>Video galary</h4>
                        </div>
                        <div class="col-10 col-12-medium videos-container m-0">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="col-12 mb-10">
                                            <div class="video-btn-wrapper">
                                                <div class="bg-img" style="background-image: url(template/images/video-korica.png);" data-overlay="4">
                                                </div>
                                                <a class="btn btn-circular btn-primary" href="/template/assets/video/Gifcoin%202.mp4" data-provide="lightbox">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                                <h6>All about the GIFcoin ICO</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-12 mb-10">
                                            <div class="video-btn-wrapper">
                                                <div class="bg-img" style="background-image: url(template/images/video1.png);" data-overlay="4">
                                                </div>
                                                <a class="btn btn-circular btn-primary" href="/template/assets/video/Gifcoin%202.mp4" data-provide="lightbox">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                                <h6>How to Secure a Steady Crypto Passive..</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-12 mb-10">
                                            <div class="video-btn-wrapper">
                                                <div class="bg-img" style="background-image: url(template/images/video-korica.png);" data-overlay="4">
                                                </div>
                                                <a class="btn btn-circular btn-primary" href="/template/assets/video/Gifcoin%202.mp4" data-provide="lightbox">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                                <h6>Why to Invest and Q&A</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-12 mb-10">
                                            <div class="video-btn-wrapper">
                                                <div class="bg-img" style="background-image: url(template/images/video1.png);" data-overlay="4">
                                                </div>
                                                <a class="btn btn-circular btn-primary" href="/template/assets/video/Gifcoin%202.mp4" data-provide="lightbox">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                                <h6>What is GIFcoin</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#two" class="goto-next scrolly">Next</a>
        </section>

    <!-- whatis -->
        <section id="whatis" class="pt-40 pb-90">
            <div class="content">
                <div class="container">
                    <header class="text-center pt-60">
                        <h2>What is GIFcoin?<span class="background_heading_1">What is GIFcoin?</span></h2>
                        <p class="lead mb-0 pb-0">Gaming Investment Fund - GIFcoin</p>
                    </header>
                    <div class="row mb-20">
                        <div class="col-12 col-md-12 text-justify custom-bbkg pt-40">

                            <p class="lead">The GIF in GIFcoin stands for Gaming Investment Fund. This fund is backed by an already functioning and profitable business – <a style="color: #0ce4fb!important;" href="https://www.vitalbet.com/" class="text-primary" target="_blank">VitаlBеt.com</a>.</p>
                            <p class="lead">VitаlBеt is fully operational and regulated gaming website with all popular industry features, such as casino, live casino, eSports, and virtual sports.</p>
                            <p class="lead">No more empty promises. Invest in a real token with a real business that is managed by a professional team of industry experts.</p>
                            <p class="lead pb-100">Buying GIF Tokens from our ICO will allow Investors to participate in an existing and moneymaking business that is at the beginning of a long-term, sustainable growth. GIF token holders will receive 80% of VitаlBеt's annual profits once a year. </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Info cua coin -->
        <section class="sectionoverflow-hidden new-section-des pt-0 pb-90">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-12-medium -mt-50">
                            <img src="https://www.gifcoin.io/assets/images/default/frontend/gifcoinlarge.png" style="max-width:100%;">
                        </div>
                        <div class="col-8 col-12-medium">
                            <table class="home-table">
                                <tbody><tr>
                                        <th>Token name</th>
                                        <td>GIFcoin</td>
                                    </tr>
                                    <tr>
                                        <th>Payout</th>
                                        <td>GIFcoin Tokens will be sent immediately to your ETH Wallet</td>
                                    </tr>
                                    <tr>
                                        <th>Total supply</th>
                                        <td>300,000,000 Tokens available</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>1 ETH = 10 000 GIF </td>
                                    </tr>
                                    <tr>
                                        <th>Minimum Purchase</th>
                                        <td>0.5 ETH</td>
                                    </tr> 
                                    <tr>
                                        <th>Maximum Purchase</th>
                                        <td>No limit</td>
                                    </tr>
                                    <tr>
                                        <th>SALE</th>
                                        <td>16 March 2018</td>
                                    </tr>
                                     <tr>
                                        <th>END</th>
                                        <td>13 November 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Accepted Cryptocurrencies</th>
                                        <td>ETH , BTC , LTC</td>
                                    </tr>
                                    <tr>
                                        <th>Minimum Cap</th>
                                        <td>5000 ETH</td>
                                    </tr>
                                    <tr>
                                        <th>Maximum Cap</th>
                                        <td>24000 ETH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Whitepaper section -->
        <section class="whitepaper_section">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-7 whitepaper-btn">
                            <h4>Do you want to know more?</h4>
                        </div>
                        <div class="col-5 whitepaper-btn m-0">
                            <a class="change-btn-res btn btn-lg btn-round btn-white" href="/GifCoin-WhitePaper.pdf">Read the Whitepaper</a>
                            <a href="{{ url('/Whitepaper.docx') }}">
                                <div class="div_whitepepar">
                                    <img src="template/images/whit-ppr.png">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seen on section -->
        <section class="seenon_section bg-grey py-80">
            <div class="content">
                <div class="container">
                    <header class="text-center mb-40 pb-20 headbg2">
                        <h2>AS SEEN ON<span class="background_heading_2">AS SEEN ON</span></h2>
                    </header>
                    <div class="row partner">
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                        <div class="col-2 mb-20">
                            <a href="" target="_blank">
                                <img src="template/images/icobench.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it work section -->
        <section class="howitwork_section">
            <div class="content">
                <div class="container">
                    <header class="text-center pt-60 headbg2 section-header">
                        <small>Success Story</small>
                        <h2>We Can Do It Together<span class="background_heading_2">We Can Do It Together</span></h2>
                        <hr>
                        <p class="lead mb-0 pb-0">We waited until we could do it right. Then we did! It's time to grow together.</p>
                    </header>

                    <div class="row">
                        <div class="col-4 col-12-medium text-center">
                            <p class="text-success"><i class="fa fa-heart-o fs-50" aria-hidden="true"></i></p>
                            <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Working project<i class="ml-4 text-success fa fa-check-circle" aria-hidden="true" title="Completed"></i></h6>
                            <p class="fw-500">Most ICOs sell only ideas. GIF is different. Our dedicated team worked hard to create a real working project - VitаlBеt.com.</p>
                        </div>
                        <div class="col-4 col-12-medium text-center">
                            <p class="text-danger"><i class="fa fa-database fs-50" aria-hidden="true"></i></p>
                            <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Working project<i class="ml-4 fa fa-check-circle" aria-hidden="true" title="Completed"></i></h6>
                            <p class="fw-500">Most ICOs sell only ideas. GIF is different. Our dedicated team worked hard to create a real working project - VitаlBеt.com.</p>
                        </div>
                        <div class="col-4 col-12-medium text-center">
                            <p class="text-success"><i class="fa fa-heart-o fs-50" aria-hidden="true"></i></p>
                            <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Working project<i class="ml-4 text-success fa fa-check-circle" aria-hidden="true" title="Completed"></i></h6>
                            <p class="fw-500">Most ICOs sell only ideas. GIF is different. Our dedicated team worked hard to create a real working project - VitаlBеt.com.</p>
                        </div>
                        <div class="col-4 col-12-medium text-center">
                            <p class="text-danger"><i class="fa fa-database fs-50" aria-hidden="true"></i></p>
                            <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Working project<i class="ml-4 fa fa-check-circle" aria-hidden="true" title="Completed"></i></h6>
                            <p class="fw-500">Most ICOs sell only ideas. GIF is different. Our dedicated team worked hard to create a real working project - VitаlBеt.com.</p>
                        </div>
                        <div class="col-4 col-12-medium text-center">
                            <p class="text-success"><i class="fa fa-heart-o fs-50" aria-hidden="true"></i></p>
                            <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Working project<i class="ml-4 text-success fa fa-check-circle" aria-hidden="true" title="Completed"></i></h6>
                            <p class="fw-500">Most ICOs sell only ideas. GIF is different. Our dedicated team worked hard to create a real working project - VitаlBеt.com.</p>
                        </div>
                        <div class="col-4 col-12-medium text-center">
                            <p class="text-danger"><i class="fa fa-database fs-50" aria-hidden="true"></i></p>
                            <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Working project<i class="ml-4 fa fa-check-circle" aria-hidden="true" title="Completed"></i></h6>
                            <p class="fw-500">Most ICOs sell only ideas. GIF is different. Our dedicated team worked hard to create a real working project - VitаlBеt.com.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sport feature section -->
        <section class="sport-feature bg-grey pt-90 pb-40">
            <div class="content">
                <div class="container">
                    <header class="text-center pt-60 headbg2 section-header">
                        <small>Forget concepts. It already works</small>
                        <h2>We already have a working project<span class="background_heading_2">We already have a working project</span></h2>
                        <hr>
                        <p class="lead mb-0 pb-0"><a href="https://buff88.com/" class="text-primary" target="_blank">Buff88.com</a> is already entertaining more than 20,000 active users. Others just have ideas, we build solutions. </p>
                    </header>

                    <div class="row gap-5">
                        <div class="col-5 col-12-medium">
                            <ul class="nav nav-vertical">
                                <li class="nav-item mt-0">
                                    <a class="nav-link" data-toggle="tab" href="#tab-1" aria-expanded="false"><i class="fa fa-futbol-o  text-primary fs-35 pr-12"></i>
                                        <h6>Sports</h6>
                                        <p>Soccer, Basketball, Volleyball, Tennis, Hockey and much more!</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-3" aria-expanded="false"><i class="fa fa-gamepad  text-primary fs-35 pr-12"></i>
                                        <h6>eSports</h6>
                                        <p>  Your favorite teams in world's top online game tournaments.</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-4" aria-expanded="false"><i class="fa fa-laptop  text-primary fs-35  pr-12"></i>
                                        <h6>Virtual sports</h6>
                                        <p>Virtual sports events - Football, Horse or Dog racing and more!</p>
                                    </a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-5" aria-expanded="true"><i class="fa fa-money  text-primary fs-35 pr-12" style="    font-size: 32px!important;
                                                                                                                 margin-right: 3px!important;"></i>
                                        <h6>Casino</h6>
                                        <p> 190+ Online casino games and Live casino  - Slots, Blackjack, Roulette.</p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-7 col-12-medium align-self-center" id="projectimgcontainer">
                            <div class="tab-content text-center">
                                <div class="tab-pane fade" id="tab-1" aria-expanded="false">
                                    <img class="shadow-3" src="https://www.gifcoin.io/assets/images/default/frontend/Sports_v1.png" alt="...">
                                </div>


                                <div class="tab-pane fade" id="tab-3" aria-expanded="false">
                                    <img class="shadow-3" src="https://www.gifcoin.io/assets/images/default/frontend/eSports_v1.png" alt="...">
                                </div>

                                <div class="tab-pane fade" id="tab-4" aria-expanded="false">
                                    <img class="shadow-3" src="https://www.gifcoin.io/assets/images/default/frontend/virtualsports.png" alt="...">
                                </div>

                                <div class="tab-pane fade active show" id="tab-5" aria-expanded="true">
                                    <img class="shadow-3" src="https://www.gifcoin.io/assets/images/default/frontend/Casino_v1.png" alt="...">
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    <!-- Sport feature section -->
    <section class="section sport-buff88 bg-grey pt-90 pb-100">
        <div class="content">
            <div class="container">
                <img class="super-hero" src="https://www.gifcoin.io/assets/images/default/frontend/Warwick_Insights_3.png">
                <header class="text-center pt-60 headbg2 section-header">
                    <h2>Roadmap goal completed<span class="background_heading_2">Roadmap goal completed</span></h2>
                    <hr>
                    <p style="color: #fff" class="lead mb-0 pb-0">After a successful Soft-cap reach, we are proud to release <a href="https://www.buff88.com/" class="text-primary" target="_blank">Buff88</a>, the new brand of VitalBet with a slick modern design and much more betting options</p>
                </header>
                <div class="row ml-0">
                    <div class="col-4 col-12-medium  align-self-start  p-20  buff-item">
                        <div>
                            <img class="hero-top-image" src="https://www.gifcoin.io/assets/images/default/frontend/Tracer-5.png">
                            <div class="hero-desc-1">
                                <h4 class="text-center">eSPORTS BETTING</h4>
                                <p style="font-weight: 400;max-width: 800px;float: right;text-shadow: -1px 1px 3px rgba(0,0,0,1);font-size: 15px;">
                                    The widest esports betting coverage on the iGaming market right now.
                                </p>
                                <ul>
                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-1.png"> 25 Competitive games</li>
                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-2.png"> 300+ eSports events monthly</li>
                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-3.png"> 1500 IN-Play Events</li>
                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-4.png"> 500+ markers</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-12-medium  align-self-start  p-20  buff-item">
                        <div>
                            <img class="hero-top-image2" src="https://www.gifcoin.io/assets/images/default/frontend/soccer-player.png">
                            <div class="hero-desc-1">
                                <h4 class="text-center">SPORTS BETTING</h4>
                                <p class="pb-30" style="    font-weight: 400;   max-width: 800px; float: right;     text-shadow: -1px 1px 3px rgba(0,0,0,1);    font-size: 15px;">
                                    Cutting.edge technology for betting - fast markers, exotic markers, cashout, and more.
                                </p>
                                <ul>
                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-5.png"> 50+ sports</li>
                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-2.png"> 2000+ betting markers</li>

                                    <li><img src="https://www.gifcoin.io/assets/images/default/frontend/icon-1-1-4.png"> 30 000+ live events monthly</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-12-medium  align-self-start  p-20  buff-item">
                        <div>
                            <img class="hero-top-image3" src="https://www.gifcoin.io/assets/images/default/frontend/11111333131313.png">
                            <div class="hero-desc-1">
                                <h4 class="text-center">CRYPTO BETTING</h4>
                                <p class="pb-0 mb-10" style="    font-weight: 400;   max-width: 800px; float: right;     text-shadow: -1px 1px 3px rgba(0,0,0,1);    font-size: 15px;">
                                    Easy and secure payment alternatives based on smart contracts. Widest range of altcoins avalable on a betting website right now.                        </p>
                                <ul>
                                    <li style="text-align: center;"><img src="https://www.gifcoin.io/assets/images/default/frontend/crypto-img99.png"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center mt-50 button-red-design">
                    <a class="btn btn-lg btn-primary" href="https://www.buff88.com/" target="_blank">Visit the new site</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Referal section -->
    <section id="referral" class="section  section-inverse py-50">
        <div class="container">
            <div class="row m-0 align-items-center text-center text-md-left">
                <div class="col-3 p-15 col-6-medium col-12-xsmall">
                    <img class="w-200 _mt-50" src="template/images/referral.png">
                </div>
                <div class="col-6 p-15 col-6-medium col-12-xsmall">
                    <h4 style="font-size: 2rem;" class="fw-700 mb-10">Real Affiliate Program!</h4>
                     <p class="lead mt-0 fw-400 pt-0"><i class="fa fa-check-circle mr-12"></i>When you refer a new user who purchases GIFcoin Tokens you'll get a 10% affiliate commission The commission is paid in ETH, BTC or LTC depending on the currency used from the new user to purchase the GIFcoin Tokens.
                    </p>
                </div>

                <div class="col-3 p-15 col-6-medium col-12-xsmall text-center text-md-right">
                    <a href="https://www.gifcoin.io/en/user/register/" class="btn btn-lg btn-round btn-white text-dark">Signup NOW!</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Two -->
        <section id="two" class="spotlight style2 right">
            <span class="image fit main"><img src="template/images/pic03.jpg" alt="" /></span>
            <div class="content">
                <header>
                    <h2>Interdum amet non magna accumsan</h2>
                    <p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
                </header>
                <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
            </div>
            <a href="#three" class="goto-next scrolly">Next</a>
        </section>

    <!-- Three -->
        <section id="three" class="spotlight style3 left">
            <span class="image fit main bottom"><img src="template/images/pic04.jpg" alt="" /></span>
            <div class="content">
                <header>
                    <h2>Interdum felis blandit praesent sed augue</h2>
                    <p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
                </header>
                <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
            </div>
            <a href="#four" class="goto-next scrolly">Next</a>
        </section>

    <!-- Four -->
        <section id="four" class="wrapper style1 special fade-up">
            <div class="container">
                <header class="major">
                    <h2>Accumsan sed tempus adipiscing blandit</h2>
                    <p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
                </header>
                <div class="box alt">
                    <div class="row gtr-uniform">
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-area-chart"></span>
                            <h3>Ipsum sed commodo</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-comment"></span>
                            <h3>Eleifend lorem ornare</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-flask"></span>
                            <h3>Cubilia cep lobortis</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-paper-plane"></span>
                            <h3>Non semper interdum</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-file"></span>
                            <h3>Odio laoreet accumsan</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                        <section class="col-4 col-6-medium col-12-xsmall">
                            <span class="icon alt major fa-lock"></span>
                            <h3>Massa arcu accumsan</h3>
                            <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                        </section>
                    </div>
                </div>
                <footer class="major">
                    <ul class="actions special">
                        <li><a href="#" class="button">Magna sed feugiat</a></li>
                    </ul>
                </footer>
            </div>
        </section>

    <!-- Five -->
        <section id="five" class="wrapper style2 special fade">
            <div class="container">
                <header>
                    <h2>Magna faucibus lorem diam</h2>
                    <p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
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
                <div class="row gap-y m-0 mb-30 fs-20 footer-contacts">
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
                </div>

                <div class="nav m-0 row gap-y pt-10" style="border-top:1px solid #5d5d5d;margin:  0;">
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/Whitepaper.docx') }}">Whitepaper</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/DistributionAgreement.docx') }}">Privacy Policy</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/') }}">Terms Of Use</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="mailto:support@cryptolink.network" target="_blank">Contact Us</a>

                </div>
             </div>
            <ul class="icons">
                <li><a href="https://twitter.com/linkplatform" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/silverlinkplatform/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="{{ url('/') }}" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <li><a href="{{ url('/') }}" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/ethlink/" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="mailto:support@cryptolink.network" target="_blank" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <!-- <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul> -->
        </footer>
@stop
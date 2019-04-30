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
                        <h2>What is SLVone?<span class="background_heading_1">What is SLVone?</span></h2>
                        <p class="lead mb-0 pb-0">A new way of holding value</p>
                    </header>
                    <div class="row mb-20">
                        <div class="col-12 col-md-12 text-justify custom-bbkg pt-40">

                            <p class="lead">SLVone is a decentralized silver platform, where the users from everywhere on the planet can mint, trade and redeem silver bullion. </p>
                            <p class="lead">We strive to build a community-driven platform by, and for the users following the success and precedents of SLVone.</p>
                            <p class="lead">SLVone is also a cryptocurrency backed by real silver and powered by the blockchain.</p>
                            <p class="lead pb-100">SLVone will create new opportunities to bring a new kind of environment that solves economic issues on this new age.</p>
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
                            <img src="template/images/slv-logo.jpg" style="max-width:100%;">
                        </div>
                        <div class="col-8 col-12-medium">
                            <table class="home-table">
                                <tbody><tr>
                                        <th>Token name</th>
                                        <td>SLV</td>
                                    </tr>
                                    <tr>
                                        <th>SWAP</th>
                                        <td>600,000 <i>(For LNK Token Holders, Snapshot Requirements)</i></td>
                                    </tr>
                                    <tr>
                                        <th>OTC <i>(KYC Requirements)</i></th>
                                        <td>1,500,000 <i>(From Jun 10 2019 to Jun 25th 2019)</i><br>
                                        1 ETH = 220 SLV <i>(Send at least 5 ETH)</i></td>
                                    </tr>
                                    <tr>
                                        <th>Pre-sale</th>
                                        <td>500,000 <i>(From Jun 25 2019 to Jul 25th 2019)</i><br>
                                        <i>1 ETH = 180 SLV</i></td>
                                    </tr>
                                    <tr>
                                        <th>Team and Advisors</th>
                                        <td>400,000 <i>(Blocked until Q3 2020)</i></td>
                                    </tr> 
                                    <tr>
                                        <th>Main-sale <i>(KYC Requirements)</i></th>
                                        <td>6,000,000 <i>(Reserved until Q2 2020)</i></td>
                                    </tr>
                                    <tr>
                                        <th>Accepted Cryptocurrencies</th>
                                        <td>ETH</td>
                                    </tr>
                                     <tr>
                                        <th>Payout</th>
                                        <td>SLV Tokens will be sent to your personal ETH Wallet</td>
                                    </tr>
                                    <tr>
                                        <th>Total supply</th>
                                        <td>9,000,000 Tokens available</td>
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
                            <a href="https://github.com/slvone/Documents/blob/master/01.%20Whitepaper_Original%20version.pdf">
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
                        <h2>TESTIMONIALS<span class="background_heading_2">TESTIMONIALS</span></h2>
                    </header>
                    <!-- <div class="row partner">
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
                    </div> -->
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
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/Whitepaper.docx') }}">Whitepaper</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/DistributionAgreement.docx') }}">Privacy Policy</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="{{ url('/') }}">Terms Of Use</a>
                    <a class="col-3 col-6-medium col-12-xsmall text-center nav-link" href="mailto:support@cryptolink.network" target="_blank">Contact Us</a>

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
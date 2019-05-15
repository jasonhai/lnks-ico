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
            <a class="goto-next scrolly">Next</a>
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
                        <div class="col-md-12 text-justify custom-bbkg pt-40">

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
                        <div class="col-md-4 -mt-50">
                            <img src="template/images/slv-logo.jpg" style="max-width:100%;">
                        </div>
                        <div class="col-md-8">
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
                        <div class="col-md-7 whitepaper-btn">
                            <h4>Do you want to know more?</h4>
                        </div>
                        <div class="col-md-5 whitepaper-btn m-0">
                            <a class="change-btn-res btn btn-lg btn-round btn-white" href="/01.Whitepaper_Original_version.pdf">Read the Whitepaper</a>
                            <a href="/01.Whitepaper_Original_version.pdf">
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
        <section class="seenon_section bg-grey py-80 testimonials">
            <div class="content">
                <div class="container">
                    <header class="text-center mb-40 pb-20 headbg2">
                        <h2>TESTIMONIALS<span class="background_heading_2">TESTIMONIALS</span></h2>
                    </header>
                    <div class="row">
                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/slv-logo.jpg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/billshihara/" target="_blank"> 
                                            <h3 class="team-member-name">Bill Shihara</h3>
                                        </a>
                                        <div class="team-member-meta"> 
                                            <span class="team-member-title">CEO at Bittrex</span> 
                                            <span class="team-member-location"> 
                                                <span class="location-name location-hong-kong">Greater Seattle Area</span> 
                                            </span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>I think assets backed tokens are an area of growth for blockchain.</p>
                                    </div>
                                    <span class="team-read-more">Read more</span>
                                </div>
                                <div class="team-member-card"> 
                                    <button class="team-member-card-close no-style">
                                        <i class="icon alt fa-close"></i> 
                                    </button>
                                    <div class="team-member-card-inner">
                                        <div class="team-member-card-text">
                                            <header class="team-member-header">
                                                <h3 class="team-member-name">Bill Shihara</h3>
                                                <div class="team-member-meta"> 
                                                    <span class="team-member-title">CEO at Bittrex</span> 
                                                    <span class="team-member-location"> 
                                                        <span class="location-name location-hong-kong">Greater Seattle Area</span> 
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>I think assets backed tokens are an area of growth for blockchain.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End member -->
                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/testimonials/vladimir.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/vlprosvirkin/" target="_blank"> 
                                            <h3 class="team-member-name">Vladimir Prosvirkin</h3>
                                        </a>
                                        <div class="team-member-meta"> 
                                            <span class="team-member-title">Managing Director at SHORTEX CryptoExchange</span> 
                                            <span class="team-member-location"> 
                                                <span class="location-name location-hong-kong">Moscow, Russian Federation</span> 
                                            </span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>Asset tokenization can give access to the portfolio diversification to crypto traders and boost liquidity of the assets by giving access to the ordinary people.</p>
                                    </div>
                                    <span class="team-read-more">Read more</span>
                                </div>
                                <div class="team-member-card"> 
                                    <button class="team-member-card-close no-style">
                                        <i class="icon alt fa-close"></i> 
                                    </button>
                                    <div class="team-member-card-inner">
                                        <div class="team-member-card-text">
                                            <header class="team-member-header">
                                                <h3 class="team-member-name">Vladimir Prosvirkin</h3>
                                                <div class="team-member-meta"> 
                                                    <span class="team-member-title">Managing Director at SHORTEX CryptoExchange</span> 
                                                    <span class="team-member-location"> 
                                                        <span class="location-name location-hong-kong">Moscow, Russian Federation</span> 
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>Asset tokenization can give access to the portfolio diversification to crypto traders and boost liquidity of the assets by giving access to the ordinary people.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End member -->
                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/testimonials/shy-yeo.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/ladybossz/" target="_blank"> 
                                            <h3 class="team-member-name">Shy Yeo</h3>
                                        </a>
                                        <div class="team-member-meta"> 
                                            <span class="team-member-title">Listing Guide Manager at Bithumb</span> 
                                            <span class="team-member-location"> 
                                                <span class="location-name location-hong-kong">Singapore</span> 
                                            </span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>Well, I guess "tokenizing silver" will be considered as ST since it is based on real asset. So buy silver token meaning that investor is holding the value of silver at certain price they agreed.</p>
                                    </div>
                                    <span class="team-read-more">Read more</span>
                                </div>
                                <div class="team-member-card"> 
                                    <button class="team-member-card-close no-style">
                                        <i class="icon alt fa-close"></i> 
                                    </button>
                                    <div class="team-member-card-inner">
                                        <div class="team-member-card-text">
                                            <header class="team-member-header">
                                                <h3 class="team-member-name">Shy Yeo</h3>
                                                <div class="team-member-meta"> 
                                                    <span class="team-member-title">Listing Guide Manager at Bithumb</span> 
                                                    <span class="team-member-location"> 
                                                        <span class="location-name location-hong-kong">Singapore</span> 
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>Well, I guess "tokenizing silver" will be considered as ST since it is based on real asset. So buy silver token meaning that investor is holding the value of silver at certain price they agreed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End member -->
                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/slv-logo.jpg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/sung-nam-0375908/" target="_blank"> 
                                            <h3 class="team-member-name">Sung Nam </h3>
                                        </a>
                                        <div class="team-member-meta"> 
                                            <span class="team-member-title">Senior Manager Global Strategy at Bithumb</span> 
                                            <span class="team-member-location"> 
                                                <span class="location-name location-hong-kong">Korea</span> 
                                            </span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>I like the idea.The issue is custodian. Wondering how open institutions will be to a custodian service in Caymans.</p>
                                    </div>
                                    <span class="team-read-more">Read more</span>
                                </div>
                                <div class="team-member-card"> 
                                    <button class="team-member-card-close no-style">
                                        <i class="icon alt fa-close"></i> 
                                    </button>
                                    <div class="team-member-card-inner">
                                        <div class="team-member-card-text">
                                            <header class="team-member-header">
                                                <h3 class="team-member-name">Sung Nam </h3>
                                                <div class="team-member-meta"> 
                                                    <span class="team-member-title">Senior Manager Global Strategy at Bithumb</span> 
                                                    <span class="team-member-location"> 
                                                        <span class="location-name location-hong-kong">Korea</span> 
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="team-member-bio">
                                                <p>I like the idea.The issue is custodian. Wondering how open institutions will be to a custodian service in Caymans.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End member -->

                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/testimonials/yanstavisski.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/yanstavisski/" target="_blank"> 
                                            <h3 class="team-member-name">Yan Stavisski</h3>
                                        </a>
                                        <div class="team-member-meta"> 
                                            <span class="team-member-title">US Operation at LATOKEN</span> 
                                            <span class="team-member-location"> 
                                                <span class="location-name location-hong-kong">San Francisco Bay Area</span> 
                                            </span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>Great idea, I know several projects who are tokenizing gold.</p>
                                    </div>
                                    <span class="team-read-more">Read more</span>
                                </div>
                                <div class="team-member-card"> 
                                    <button class="team-member-card-close no-style">
                                        <i class="icon alt fa-close"></i> 
                                    </button>
                                    <div class="team-member-card-inner">
                                        <div class="team-member-card-text">
                                            <header class="team-member-header">
                                                <h3 class="team-member-name">Yan Stavisski</h3>
                                                <div class="team-member-meta"> 
                                                    <span class="team-member-title">US Operation at LATOKEN</span> 
                                                    <span class="team-member-location"> 
                                                        <span class="location-name location-hong-kong">San Francisco Bay Area</span> 
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="team-member-bio">
                                                <p>Great idea, I know several projects who are tokenizing gold.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/testimonials/thsun.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/thsun/" target="_blank"> 
                                            <h3 class="team-member-name">Ben Sun </h3>
                                        </a>
                                        <div class="team-member-meta"> 
                                            <span class="team-member-title">Community Manager at OKEx</span> 
                                            <span class="team-member-location"> 
                                                <span class="location-name location-hong-kong">Taipei City, Taiwan</span> 
                                            </span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>Silver backed crypto sounds pretty good.</p>
                                    </div>
                                    <span class="team-read-more">Read more</span>
                                </div>
                                <div class="team-member-card"> 
                                    <button class="team-member-card-close no-style">
                                        <i class="icon alt fa-close"></i> 
                                    </button>
                                    <div class="team-member-card-inner">
                                        <div class="team-member-card-text">
                                            <header class="team-member-header">
                                                <h3 class="team-member-name">Ben Sun </h3>
                                                <div class="team-member-meta"> 
                                                    <span class="team-member-title">Community Manager at OKEx</span> 
                                                    <span class="team-member-location"> 
                                                        <span class="location-name location-hong-kong">Taipei City, Taiwan</span> 
                                                    </span>
                                                </div>
                                            </header>
                                            <div class="team-member-bio">
                                                <p>Silver backed crypto sounds pretty good.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Five -->
    @include('partials.subcribe')

    <!-- Footer -->
    @include('partials.footer')   

@stop
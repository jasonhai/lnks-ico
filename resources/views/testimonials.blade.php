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
                <h2>Testimonials</h2>
                <p>What people say about Decentralized Silver Market and Silverlink Platform <br>
What people say about Tokenizing Silver on Blockchain and Silverlink Platform</p>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>
        
    <!-- Seen on section -->
    <section class="seenon_section bg-grey py-80 testimonials">
        <div class="content">
            <div class="container">
                <header class="text-center mb-40 pb-20 headbg2">
                    <h2>TESTIMONIALS<span class="background_heading_2">TESTIMONIALS</span></h2>
                </header>
                <div class="row">
                    <div class="col-3 mb-20 team-tile">
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
                    <div class="col-3 mb-20 team-tile">
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
                    <div class="col-3 mb-20 team-tile">
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
                    <div class="col-3 mb-20 team-tile">
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

                    <div class="col-3 mb-20 team-tile">
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

                    <div class="col-3 mb-20 team-tile">
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

    <!-- Footer --> 
    @include('partials.footer')   
    
@stop
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
                <a href="https://github.com/slvone" target="_blank"><span class="image"><img src="template/images/pic01.png" alt="" /></span></a>
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

                            <p class="lead">SLVone is a decentralized silver platform, where the users from everywhere on the globe can mint, trade and redeem their silver bullion. </p>
                            <p class="lead">We strive to build a community-driven platform by, and for the users following the success and precedents of SLVone.</p>
                            <p class="lead">SLVone is also a cryptocurrency backed by real silver and powered by the blockchain.</p>
                            <p class="lead pb-100">SLVone will create new opportunities to bring a new kind of environment that solves economic issues on this new age.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video width="100%" poster="template/images/slv-logo.jpg" controls>--}}
                        <source src="template/video/Silverlink_Video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

        <!-- Info cua coin -->
        <section class="sectionoverflow-hidden new-section-des pt-0 pb-90">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 -mt-50">
                            <div class=" video-btn-wrapper">
                                <div class="bg-img" data-overlay="4">
                                </div>
                                <a class="btn btn-circular btn-primary" href="template/video/Silverlink_Video.mp4" data-provide="lightbox" data-lity>
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
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
                                        <th>OTC & IEO<i>(KYC Requirements)</i></th>
                                        <td>1,500,000 <i>(From Jul 10th 2019 to Sep 10th 2019)</i><br>
                                        1 ETH = 220 SLV <i>(Send at least 5 ETH)</i></td>
                                    </tr>
                                    <tr>
                                        <th>Pre-sale</th>
                                        <td>500,000 <i>(From Jul 10th 2019 to Aug 25th 2019)</i><br>
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
                                    <img src="template/images/bill-shihara-updated.jpg">
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
                        <!-- End member -->
                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/shy-yeo.jpg">
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
                        <!-- <div class="col-md-3 mb-20 team-tile">
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
                        </div> -->
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
                                    <img src="template/images/thsun.jpg">
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

                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/Daniel-Mitchell.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/daniel-mitchell-4a963b87/" target="_blank">
                                            <h3 class="team-member-name">Daniel Mitchell</h3>
                                        </a>
                                        <div class="team-member-meta">
                                            <span class="team-member-title">Cryptocurrency Journalist at Cointelegraph & CryptoCoinsNews</span>
                                            <span class="team-member-location">London, Greater London, United Kingdom</span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>I am certainly interested in precious-metals backed crypto personally, and so I think it would be something we could work with!</p>
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
                                                <h3 class="team-member-name">Daniel Mitchell</h3>
                                                <div class="team-member-meta">
                                                    <span class="team-member-title">Cryptocurrency Journalist at Cointelegraph & CryptoCoinsNews</span>
                                                    <span class="team-member-location">London, Greater London, United Kingdom</span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>I am certainly interested in precious-metals backed crypto personally, and so I think it would be something we could work with!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/Matthew-Gertler.jpg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/matthewgertler/" target="_blank">
                                            <h3 class="team-member-name">Matthew Gertler</h3>
                                        </a>
                                        <div class="team-member-meta">
                                            <span class="team-member-title">General Counsel at Reserve</span>
                                            <span class="team-member-location">Greater Los Angeles Area</span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>I expect over the long run that many assets and commodities will be tokenized. Gold has been a popular first attempt (e.g. DigixDAO), but I would expect other precious metals, like silver, to be tokenized as well at some point.
                                            I fully expect silver, copper, real estate, wheat, and other commodities to be tokenized. I’m not a huge fan of DigixDAO, I only mentioned them because I think they’re the most well known at this point.</p>
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
                                                <h3 class="team-member-name">Matthew Gertler</h3>
                                                <div class="team-member-meta">
                                                    <span class="team-member-title">General Counsel at Reserve</span>
                                                    <span class="team-member-location">Greater Los Angeles Area</span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>I expect over the long run that many assets and commodities will be tokenized. Gold has been a popular first attempt (e.g. DigixDAO), but I would expect other precious metals, like silver, to be tokenized as well at some point.
                                                    I fully expect silver, copper, real estate, wheat, and other commodities to be tokenized. I’m not a huge fan of DigixDAO, I only mentioned them because I think they’re the most well known at this point.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/Julie-Maupin.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/julie-maupin-606aa4/" target="_blank">
                                            <h3 class="team-member-name">Julie Maupin</h3>
                                        </a>
                                        <div class="team-member-meta">
                                            <span class="team-member-title">Director of Social Impact & Public Regulatory Affairs at IOTA Foundation</span>
                                            <span class="team-member-location">Frankfurt am Main, Hessen, Germany</span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>I haven't really thought about this deeply to be honest. I expect we will see
                                            more precious metals backed cryptos emerge in the coming years, as history shows these metals are always a fallback investment in turbulent economic times (when major currencies come under pressure). Giving commodities digital twins on a blockchain so as to make them more easily tradable is something I imagine there's some demand out there for.</p>
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
                                                <h3 class="team-member-name">Julie Maupin</h3>
                                                <div class="team-member-meta">
                                                    <span class="team-member-title">Director of Social Impact & Public Regulatory Affairs at IOTA Foundation</span>
                                                    <span class="team-member-location">Frankfurt am Main, Hessen, Germany</span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>I haven't really thought about this deeply to be honest. I expect we will see
                                                    more precious metals backed cryptos emerge in the coming years, as history shows these metals are always a fallback investment in turbulent economic times (when major currencies come under pressure). Giving commodities digital twins on a blockchain so as to make them more easily tradable is something I imagine there's some demand out there for.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-20 team-tile">
                            <div class="team-tile-content">
                                <div class="member-head">
                                    <img src="template/images/Jose-Urdaneta.jpeg">
                                </div>
                                <div class="member-content">
                                    <header class="team-member-header">
                                        <a href="https://www.linkedin.com/in/jose-urdaneta-9725361/" target="_blank">
                                            <h3 class="team-member-name">Jose Urdaneta</h3>
                                        </a>
                                        <div class="team-member-meta">
                                            <span class="team-member-title">Entrepreneur At Babson College</span>
                                            <span class="team-member-location">Miami/Fort Lauderdale Area</span>
                                        </div>
                                    </header>
                                    <div class="team-member-bio">
                                        <p>I think that a crypto backed by silver could be a good idea; however, the challenge will be to motivate people to use it... If you that plan, then go ahead a make it public... Today, there are some crypto currencies backed by gold, U$ dollars, etc; so yours will be another alternative for crypto backed by value of a metal, and not by supply and demand...
                                            So, think on ways to generate usage of this coin, and who could actually benefit from its usage...</p>
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
                                                <h3 class="team-member-name">Jose Urdaneta</h3>
                                                <div class="team-member-meta">
                                                    <span class="team-member-title">Entrepreneur At Babson College</span>
                                                    <span class="team-member-location">Miami/Fort Lauderdale Area</span>
                                                </div>
                                            </header>
                                            <div class="team-member-card-content">
                                                <p>I think that a crypto backed by silver could be a good idea; however, the challenge will be to motivate people to use it... If you that plan, then go ahead a make it public... Today, there are some crypto currencies backed by gold, U$ dollars, etc; so yours will be another alternative for crypto backed by value of a metal, and not by supply and demand...
                                                    So, think on ways to generate usage of this coin, and who could actually benefit from its usage...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a class="btn-dark btn btn-general" href="{{ url('/testimonials') }}">Read more</a>
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
@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header style="text-align: center;">
                <h2>Testimonials</h2>
                <span style="color: #fff">What people say about Decentralized Silver Market and Silverlink Platform</span><br>
                    <span style="color: #fff">What people say about Tokenizing Silver on Blockchain</span>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>

    <!-- Seen on section -->
    <section class="seenon_section bg-grey testimonials pt-20">
        <div class="content">
            <div class="container">
                <div class="title-block">
                    <h2 class="section-title text-center">
                        <span>Big Exchanges</span>
                    </h2>
                </div>
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
                                        <span class="team-member-location">Greater Seattle Area</span>
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
                                                <span class="team-member-location">Greater Seattle Area</span>
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
                                        <span class="team-member-location">Singapore</span>
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
                                                <span class="team-member-location">Singapore</span>
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
                                <img src="template/images/testimonials/yanstavisski.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/yanstavisski/" target="_blank">
                                        <h3 class="team-member-name">Yan Stavisski</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">US Operation at LATOKEN</span>
                                        <span class="team-member-location">San Francisco Bay Area</span>
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
                                                <span class="team-member-location">San Francisco Bay Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
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
                                        <h3 class="team-member-name">Ben Sun</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Community Manager at OKEx</span>
                                        <span class="team-member-location">Taipei City, Taiwan</span>
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
                                            <h3 class="team-member-name">Ben Sun</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Community Manager at OKEx</span>
                                                <span class="team-member-location">Taipei City, Taiwan</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Silver backed crypto sounds pretty good.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-block">
                    <h2 class="section-title text-center">
                        <span>Media & Marketing Experts</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Shalin-Verma.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/shalin-verma/" target="_blank">
                                        <h3 class="team-member-name">Shalin Verma</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Co-Founder at The Times of Crypto</span>
                                        <span class="team-member-location">United Arab Emirates</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Well, I've worked closely with CuPrum and they were tokenizing copper. So I think the same criteria would go for this as well.
                                        As the rates are on increase on such metals so it's a win win on raising investments having such idea on silver.
                                        Secondly, considering the current market scenario... On btc and eth as low as 5000 and 180 respectively, such sureshot idea on investing in silver would be a great</p>
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
                                            <h3 class="team-member-name">Shalin Verma</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Co-Founder at The Times of Crypto</span>
                                                <span class="team-member-location">United Arab Emirates</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Well, I've worked closely with CuPrum and they were tokenizing copper. So I think the same criteria would go for this as well.
                                                As the rates are on increase on such metals so it's a win win on raising investments having such idea on silver.
                                                Secondly, considering the current market scenario... On btc and eth as low as 5000 and 180 respectively, such sureshot idea on investing in silver would be a great</p>
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
                                <img src="template/images/Francis-Ifie.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/francis-i-1ba7b325/" target="_blank">
                                        <h3 class="team-member-name">Francis Ifie</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Director at Blockchain Investment Technology Conference Middle-East</span>
                                        <span class="team-member-location">United Arab Emirates</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Considering I run blockchain events, I have dealt with numerous Startups.
                                        I have seen ICOs tokenizing Gold, Oil production assets, Diamond.
                                        Tokenizing any precious metal in any form is always a good idea.</p>
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
                                            <h3 class="team-member-name">Francis Ifie</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Director at Blockchain Investment Technology Conference Middle-East</span>
                                                <span class="team-member-location">United Arab Emirates</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Considering I run blockchain events, I have dealt with numerous Startups.
                                                I have seen ICOs tokenizing Gold, Oil production assets, Diamond.
                                                Tokenizing any precious metal in any form is always a good idea.</p>
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
                                <img src="template/images/Ayodeji-Israel-Awosika.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/ayodeji-israel-awosika-69924124/" target="_blank">
                                        <h3 class="team-member-name">Ayodeji Israel Awosika</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Hydrogen Decentralized Ambassador at Hydrogen Nigeria</span>
                                        <span class="team-member-location"></span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I have seen quite a number of tokenization on chain
                                        and which has been an improvement to the regular business model, digital silver will be a great initiative if carefully planned and handled with an experience team of business developers and tech experts.</p>
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
                                            <h3 class="team-member-name">Ayodeji Israel Awosika</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Hydrogen Decentralized Ambassador at Hydrogen Nigeria</span>
                                                <span class="team-member-location"></span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I have seen quite a number of tokenization on chain
                                                and which has been an improvement to the regular business model, digital silver will be a great initiative if carefully planned and handled with an experience team of business developers and tech experts.</p>
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
                                <img src="template/images/Stewart-J.-Severino.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/stewartseverino/" target="_blank">
                                        <h3 class="team-member-name">Stewart J. Severino</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">CMO/CXO at U.S. & Texas LawShield®</span>
                                        <span class="team-member-location">Spring, Texas</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>“Silver backed Crypto” is more intriguing.</p>
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
                                            <h3 class="team-member-name">Stewart J. Severino</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">CMO/CXO at U.S. & Texas LawShield®</span>
                                                <span class="team-member-location">Spring, Texas</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>“Silver backed Crypto” is more intriguing.</p>
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
                    <!-- End member -->
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Sead-Fadilpašić.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/seadf/" target="_blank">
                                        <h3 class="team-member-name">Sead Fadilpašić</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Journalist at Cryptonews</span>
                                        <span class="team-member-location">Bosnia and Herzegovina</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Generally speaking, tokenizing precious metals is probably a good thing, otherwise big players like JPMorgan wouldn't be doing it. Also, silver is probably a better solution than gold at the moment, given the price suppression that's been going on for quite some time now.</p>
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
                                            <h3 class="team-member-name">Sead Fadilpašić</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Journalist at Cryptonews</span>
                                                <span class="team-member-location">Bosnia and Herzegovina</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Generally speaking, tokenizing precious metals is probably a good thing, otherwise big players like JPMorgan wouldn't be doing it. Also, silver is probably a better solution than gold at the moment, given the price suppression that's been going on for quite some time now.</p>
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
                    <!-- End member -->
                </div>
                <div class="title-block">
                    <h2 class="section-title text-center">
                        <span>Tech Companies</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Jesus-G.-Bonilla.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/jesusgarciabonilla/" target="_blank">
                                        <h3 class="team-member-name">Jesus G. Bonilla</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Digital Solution Manager at Huawei Technologies</span>
                                        <span class="team-member-location">Madrid, Spain</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>In my opinion (just an opinion) silver backed crypto finally relies on the physical item itself, is not 100% electronic, someone has to store the silver and anyway silver has limited real value from the usability perspective. Some others cryptos uses gold instead as the royal hose of England, but for me is just like paper money but in electronic format.</p>
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
                                            <h3 class="team-member-name">Jesus G. Bonilla</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Digital Solution Manager at Huawei Technologies</span>
                                                <span class="team-member-location">Madrid, Spain</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>In my opinion (just an opinion) silver backed crypto finally relies on the physical item itself, is not 100% electronic, someone has to store the silver and anyway silver has limited real value from the usability perspective. Some others cryptos uses gold instead as the royal hose of England, but for me is just like paper money but in electronic format.</p>
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
                                <img src="template/images/Nitin-Gaur.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/nitin-gaur-75571a9/" target="_blank">
                                        <h3 class="team-member-name">Nitin Gaur</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Director - IBM WW Digital Asset Labs at IBM</span>
                                        <span class="team-member-location">Round Rock, Texas</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It has been done before for Gold.. look at Paxos.</p>
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
                                            <h3 class="team-member-name">Nitin Gaur</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Director - IBM WW Digital Asset Labs at IBM</span>
                                                <span class="team-member-location">Round Rock, Texas</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It has been done before for Gold.. look at Paxos.</p>
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
                                <img src="template/images/Hudson-Sutherland-updated.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/hudsonsutherland/" target="_blank">
                                        <h3 class="team-member-name">Hudson Sutherland</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Functional Technical Manager at Oracle</span>
                                        <span class="team-member-location">Washington D.C. Metro Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>"I love the idea of tokenizing real assets. I think stocks and bonds are another
                                        good asset class to look at. Anything that brings truth to the market is worthwhile. Great way to spot manipulation as well."</p>
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
                                            <h3 class="team-member-name">Hudson Sutherland</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Functional Technical Manager at Oracle</span>
                                                <span class="team-member-location">Washington D.C. Metro Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>"I love the idea of tokenizing real assets. I think stocks and bonds are another
                                                good asset class to look at. Anything that brings truth to the market is worthwhile. Great way to spot manipulation as well."</p>
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
                                <img src="template/images/Dr.-Fenglian-Xu-updated.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/fenglianxu/" target="_blank">
                                        <h3 class="team-member-name">Dr. Fenglian Xu</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Chief Scientist at Aladdin Healthcare Technologies</span>
                                        <span class="team-member-location">United Kingdom</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>"I understand correctly that your platform rewards participants token
                                        when they purchase silver."</p>
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
                                            <h3 class="team-member-name">Dr. Fenglian Xu</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Chief Scientist at Aladdin Healthcare Technologies</span>
                                                <span class="team-member-location">United Kingdom</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>"I understand correctly that your platform rewards participants token
                                                when they purchase silver."</p>
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
                                <img src="template/images/Bo-Yang-updated.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/bo-yang-6b3a91/" target="_blank">
                                        <h3 class="team-member-name">Bo Yang</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">ISSO Rep for China IBM</span>
                                        <span class="team-member-location">Poughquag, New York</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think that Tokenizing precious metal is a good idea in general. The more scarcity of the metal or material, the more value tokenizing can provide like gold, precious stone, etc.</p>
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
                                            <h3 class="team-member-name">Bo Yang</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">ISSO Rep for China IBM</span>
                                                <span class="team-member-location">Poughquag, New York</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think that Tokenizing precious metal is a good idea in general. The more scarcity of the metal or material, the more value tokenizing can provide like gold, precious stone, etc.</p>
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
                                <img src="template/images/Dean-Steinbeck.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/dean-steinbeck-79b32b36/" target="_blank">
                                        <h3 class="team-member-name">Dean Steinbeck</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">General Counsel at Horizen</span>
                                        <span class="team-member-location"></span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I am a big fan of asset backed crypto projects! There are a few gold backed tokens.</p>
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
                                            <h3 class="team-member-name">Dean Steinbeck</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">General Counsel at Horizen</span>
                                                <span class="team-member-location"></span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I am a big fan of asset backed crypto projects! There are a few gold backed tokens.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End member -->
                </div>
                <div class="title-block">
                    <h2 class="section-title text-center">
                        <span>Blockchain Companies</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Abraham-Choi-updated.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/abraham-choi-b893a016a/" target="_blank">
                                        <h3 class="team-member-name">Abraham Choi</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Director at Crypto HongBao</span>
                                        <span class="team-member-location">Korea</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>In my perspectives of the current silver market, the "silver backed crypto" is the correct way to go. Since silver will upsell gold and the value of silver is constantly going up you can net it out with blockchain technology.</p>
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
                                            <h3 class="team-member-name">Abraham Choi</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Director at Crypto HongBao</span>
                                                <span class="team-member-location">Korea</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>In my perspectives of the current silver market, the "silver backed crypto" is the correct way to go. Since silver will upsell gold and the value of silver is constantly going up you can net it out with blockchain technology.</p>
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
                                <img src="template/images/Alberto-Guerrero-Montilla-updated.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/albertoguerreromontilla/" target="_blank">
                                        <h3 class="team-member-name">Alberto Guerrero Montilla</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder at EOS Venezuela</span>
                                        <span class="team-member-location">Mérida Area, Venezuela</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>As a stablecoin. A token pegged to the silver value index or a token which values is backed by a physical reserve in silver.</p>
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
                                            <h3 class="team-member-name">Alberto Guerrero Montilla</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder at EOS Venezuela</span>
                                                <span class="team-member-location">Mérida Area, Venezuela</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>As a stablecoin. A token pegged to the silver value index or a token which values is backed by a physical reserve in silver.</p>
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
                                <img src="template/images/Paul-Christian-Espiritu.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/paul-christian-espiritu-548b12157/" target="_blank">
                                        <h3 class="team-member-name">Paul Christian Espiritu</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">General Manager at NEM Middle EastNEM.io Foundation</span>
                                        <span class="team-member-location">United Arab Emirates</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Properly audited it is good. Can easily be done on the NEM Blockchain.</p>
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
                                            <h3 class="team-member-name">Paul Christian Espiritu</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">General Manager at NEM Middle EastNEM.io Foundation</span>
                                                <span class="team-member-location">United Arab Emirates</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Properly audited it is good. Can easily be done on the NEM Blockchain.</p>
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
                    <!-- End member -->
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Randall-Lee-Pires.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/randallpires/" target="_blank">
                                        <h3 class="team-member-name">Randall Lee Pires</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder & CEO at Blockchain Ecosystem Advisors</span>
                                        <span class="team-member-location">Atlanta, Georgia</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Asset backed tokens are the future. Been talking with many companies on the subject. Is it for physical extracted quantities or proven reserves?</p>
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
                                            <h3 class="team-member-name">Randall Lee Pires</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder & CEO at Blockchain Ecosystem Advisors</span>
                                                <span class="team-member-location">Atlanta, Georgia</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Asset backed tokens are the future. Been talking with many companies on the subject. Is it for physical extracted quantities or proven reserves?</p>
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
                                <img src="template/images/Geoffrey-Cher.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/geoffrey-cher-3b759b31/" target="_blank">
                                        <h3 class="team-member-name">Geoffrey Cher</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Compliance at DigixGlobal</span>
                                        <span class="team-member-location">Singapore</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think Silver could be an interesting real world asset to have on the blockchain, because the prices of Silver have much larger spreads and could potentially have a more interesting investment trading perspective.</p>
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
                                            <h3 class="team-member-name">Geoffrey Cher</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Compliance at DigixGlobal</span>
                                                <span class="team-member-location">Singapore</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think Silver could be an interesting real world asset to have on the blockchain, because the prices of Silver have much larger spreads and could potentially have a more interesting investment trading perspective.</p>
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
                                <img src="template/images/Gyanesh-Maheshwar.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/gyanesh-maheshwar-7189023/" target="_blank">
                                        <h3 class="team-member-name">Gyanesh Maheshwar</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">CIO at Cindicator</span>
                                        <span class="team-member-location">Singapore</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>For any blockchain related idea, the first question I ask is how is this solving
                                        a real world problem currently? Silver is available for purchase/trading in many markets as spot or futures contracts.</p>
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
                                            <h3 class="team-member-name">Gyanesh Maheshwar</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">CIO at Cindicator</span>
                                                <span class="team-member-location">Singapore</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>For any blockchain related idea, the first question I ask is how is this solving a real world problem currently? Silver is available for purchase/trading in many markets as spot or futures contracts.</p>
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
                                <img src="template/images/Ryan-Colby.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/ryancolby/" target="_blank">
                                        <h3 class="team-member-name">Ryan Colby</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder & CEO at Token Fest</span>
                                        <span class="team-member-location">Indian Trail, North Carolina</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Great idea. Already being done with diamonds and gold. We have some exhibit
                                        and sponsorship packages available for Token Fest 2019.</p>
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
                                            <h3 class="team-member-name">Ryan Colby</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder & CEO at Token Fest</span>
                                                <span class="team-member-location">Indian Trail, North Carolina</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Great idea. Already being done with diamonds and gold. We have some exhibit
                                                and sponsorship packages available for Token Fest 2019.</p>
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
                                <img src="template/images/Prashant-Nagawade.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/prashant-nagawade/" target="_blank">
                                        <h3 class="team-member-name">Prashant Nagawade</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Blockchain Developer at InfiniChains</span>
                                        <span class="team-member-location">Pune, Maharashtra, India</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Yes it is quite a good idea. As the silver price rises, the token price will go higher, right?</p>
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
                                            <h3 class="team-member-name">Prashant Nagawade</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Blockchain Developer at InfiniChains</span>
                                                <span class="team-member-location">Pune, Maharashtra, India</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Yes it is quite a good idea. As the silver price rises, the token price will go higher, right?</p>
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
                                <img src="template/images/Prafulla-Vyawahare-updated.jpg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/prafullavyawahare/" target="_blank">
                                        <h3 class="team-member-name">Prafulla Vyawahare</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Project Director at Hyperledger</span>
                                        <span class="team-member-location">Irvine, California</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think this is a great idea.</p>
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
                                            <h3 class="team-member-name">Prafulla Vyawahare</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Project Director at Hyperledger</span>
                                                <span class="team-member-location">Irvine, California</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think this is a great idea.</p>
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
                                <img src="template/images/Mark-Schmidt.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/mark-schmidt-0a78b1b1/" target="_blank">
                                        <h3 class="team-member-name">Mark Schmidt</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Community Manager at IOTA Foundation</span>
                                        <span class="team-member-location">Hamburg Area, Germany</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I find it exciting if projects pop up researching this endeavor, as Tokenization has the potential to change the global market.</p>
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
                                            <h3 class="team-member-name">Mark Schmidt</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Community Manager at IOTA Foundation</span>
                                                <span class="team-member-location">Hamburg Area, Germany</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I find it exciting if projects pop up researching this endeavor, as Tokenization has the potential to change the global market.</p>
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
                                <img src="template/images/Joshua-Marriage.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/satoshua/" target="_blank">
                                        <h3 class="team-member-name">Joshua Marriage</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Global Spokeperson & Australian Coordinator at Cloakcoin</span>
                                        <span class="team-member-location">Sydney, New South Wales, Australia</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think if you’re providing physical custodianship of the silver it would be very worthwhile. Perhaps if you partnered with a vault.</p>
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
                                            <h3 class="team-member-name">Joshua Marriage</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Global Spokeperson & Australian Coordinator at Cloakcoin</span>
                                                <span class="team-member-location">Sydney, New South Wales, Australia</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think if you’re providing physical custodianship of the silver it would be very worthwhile. Perhaps if you partnered with a vault.</p>
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
                                <img src="template/images/Michael-Anthony.jpg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/map01/" target="_blank">
                                        <h3 class="team-member-name">Michael Anthony</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Former Business Development at Wanchain</span>
                                        <span class="team-member-location">United States</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It’s definitely an emerging and reliable sector of industry and I believe it has a bright future (gold, silver, etc).</p>
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
                                            <h3 class="team-member-name">Michael Anthony</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Former Business Development at Wanchain</span>
                                                <span class="team-member-location">United States</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It’s definitely an emerging and reliable sector of industry and I believe it has a bright future (gold, silver, etc).</p>
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
                                <img src="template/images/Chai-Shepherd.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/chai-shepherd-1249b682/" target="_blank">
                                        <h3 class="team-member-name">Chai Shepherd</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Co-Founder at Plaak</span>
                                        <span class="team-member-location">Munster, Western Australia, Australia</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>These are a security token or asset base commodity, resource tokens will be a thing of the future to trade between countries. It's not something I would do as an STO or ICO. This type of infrastructure needs to be a standard or a choice of trade without using fiat currency.</p>
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
                                            <h3 class="team-member-name">Chai Shepherd</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Co-Founder at Plaak</span>
                                                <span class="team-member-location">Munster, Western Australia, Australia</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>These are a security token or asset base commodity, resource tokens will be a thing of the future to trade between countries. It's not something I would do as an STO or ICO. This type of infrastructure needs to be a standard or a choice of trade without using fiat currency.</p>
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
                                <img src="template/images/Anya-Nova.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/anya-nova/" target="_blank">
                                        <h3 class="team-member-name">Anya Nova</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Crypto Economist at Power Ledger / Public Speaker</span>
                                        <span class="team-member-location">Perth, Australia</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Well, I think it's a good idea. What matters is how you execute on it.</p>
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
                                            <h3 class="team-member-name">Anya Nova</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Crypto Economist at Power Ledger / Public Speaker</span>
                                                <span class="team-member-location">Perth, Australia</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Well, I think it's a good idea. What matters is how you execute on it.</p>
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
                                <img src="template/images/John-Anthony-Pecson.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/jonpecson/" target="_blank">
                                        <h3 class="team-member-name">John Anthony Pecson</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Software engineer at NEM Foundation</span>
                                        <span class="team-member-location">Philippines</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I heard about some news about about J.P. Morgan and Ripple wanna tokenize gold into digital assets.</p>
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
                                            <h3 class="team-member-name">John Anthony Pecson</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Software engineer at NEM Foundation</span>
                                                <span class="team-member-location">Philippines</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I heard about some news about about J.P. Morgan and Ripple wanna tokenize gold into digital assets.</p>
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
                                <img src="template/images/Dimitar-Dimitrakiev.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/dimitar-dimitrakiev/" target="_blank">
                                        <h3 class="team-member-name">Dimitar Dimitrakiev</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder at Dentacoin</span>
                                        <span class="team-member-location">Varna, Varna Province, Bulgaria</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Seems like an interesting idea to explore. I can't say anything more than that.</p>
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
                                            <h3 class="team-member-name">Dimitar Dimitrakiev</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder at Dentacoin</span>
                                                <span class="team-member-location">Varna, Varna Province, Bulgaria</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Seems like an interesting idea to explore. I can't say anything more than that.</p>
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
                                <img src="template/images/Adam-Abrams.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/adamabrams1/" target="_blank">
                                        <h3 class="team-member-name">Adam Abrams</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Community & Social @ Bancor</span>
                                        <span class="team-member-location">Israel</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>There are already quite a few asset-pegged cryptos out there.... particularly ones based on precious metals.</p>
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
                                            <h3 class="team-member-name">Adam Abrams</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Community & Social @ Bancor</span>
                                                <span class="team-member-location">Israel</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>There are already quite a few asset-pegged cryptos out there.... particularly ones based on precious metals.</p>
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
                                <img src="template/images/Huiling-Xie.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/huiling-xie-53693948/" target="_blank">
                                        <h3 class="team-member-name">Huiling Xie</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Business Developer at DigixDAO</span>
                                        <span class="team-member-location">Singapore</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>That sounds interesting! I think the main thing you would have to look at
                                        is the silver market, or how silver trades as a commodity in the markets. It wouldn't be a stablecoin, but would be an interesting asset backed token concept.</p>
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
                                            <h3 class="team-member-name">Huiling Xie</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Business Developer at DigixDAO</span>
                                                <span class="team-member-location">Singapore</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>That sounds interesting! I think the main thing you would have to look at
                                                is the silver market, or how silver trades as a commodity in the markets. It wouldn't be a stablecoin, but would be an interesting asset backed token concept.</p>
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
                                <img src="template/images/Steve-Lee.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/stevelee82/" target="_blank">
                                        <h3 class="team-member-name">Steve Lee</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Chief Marketing Officer at Komodo Platform</span>
                                        <span class="team-member-location">San Francisco Bay Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>My opinion is that being able to peg real-world assets to coins/tokens is
                                        overall beneficial in building confidence for crypto-based assets. I anticipate that stable coins and real-world pegged crypto assets will see much more attention in 2019, helping validate blockchain as a disruptive technology. However, there will be increasing need to show how blockchain can increase the overall value of a solution over traditional models and methods.</p>
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
                                            <h3 class="team-member-name">Steve Lee</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Chief Marketing Officer at Komodo Platform</span>
                                                <span class="team-member-location">San Francisco Bay Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>My opinion is that being able to peg real-world assets to coins/tokens is
                                                overall beneficial in building confidence for crypto-based assets. I anticipate that stable coins and real-world pegged crypto assets will see much more attention in 2019, helping validate blockchain as a disruptive technology. However, there will be increasing need to show how blockchain can increase the overall value of a solution over traditional models and methods.</p>
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
                                <img src="template/images/Paul-Snow.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/paulsn/" target="_blank">
                                        <h3 class="team-member-name">Paul Snow</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">CEO at Factom, Chairman of the Texas Bitcoin Conference</span>
                                        <span class="team-member-location">Austin, Texas Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I believe tokenized commodities (including Silver) coupled with digital identities, reputation, verifiable processes, etc. as a foundation for verification of assets could be very powerful. Today most of the economy is locked out of some seriously basic investments like Silver. And they are locked out because they cannot buy, and they cannot take ownership, and they cannot sell. Tokenized silver addresses that issue for people that are not already in the west, not already wealthy, and not only connected and educated in the current market.  And it addresses (potentially) this issue in a safe and efficient fashion.</p>
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
                                            <h3 class="team-member-name">Paul Snow</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">CEO at Factom, Chairman of the Texas Bitcoin Conference</span>
                                                <span class="team-member-location">Austin, Texas Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I believe tokenized commodities (including Silver) coupled with digital identities, reputation, verifiable processes, etc. as a foundation for verification of assets could be very powerful. Today most of the economy is locked out of some seriously basic investments like Silver. And they are locked out because they cannot buy, and they cannot take ownership, and they cannot sell. Tokenized silver addresses that issue for people that are not already in the west, not already wealthy, and not only connected and educated in the current market.  And it addresses (potentially) this issue in a safe and efficient fashion.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End member -->
                </div>
                <div class="title-block">
                    <h2 class="section-title text-center">
                        <span>Others</span>
                    </h2>
                </div>
                <div class="row">
                    <!-- End member -->
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Garvit-Goel.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/garvitgoel/" target="_blank">
                                        <h3 class="team-member-name">Garvit Goel</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Co-founder at Fraction0x</span>
                                        <span class="team-member-location">India</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Sure. People have been tokenizing gold quite a lot. From a silver trading perspective, its definitely great.
                                        Also, it would allow someone to convert his crypto portfolio into silver effectively. So that has great benefits too!</p>
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
                                            <h3 class="team-member-name">Garvit Goel</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Co-founder at Fraction0x</span>
                                                <span class="team-member-location">India</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Sure. People have been tokenizing gold quite a lot. From a silver trading perspective, its definitely great.
                                                Also, it would allow someone to convert his crypto portfolio into silver effectively. So that has great benefits too!</p>
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
                                <img src="template/images/Edmund-Ng.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/edmund-ng-%E9%BB%84%E9%BA%92%E6%A6%AE-3122168b/" target="_blank">
                                        <h3 class="team-member-name">Edmund Ng</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Director at ZNO International (Pte.) Limited</span>
                                        <span class="team-member-location">Singapore</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Commodities in the cryptocurrency may be the next move.
                                        As the previous ICO, there is no backing.</p>
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
                                            <h3 class="team-member-name">Edmund Ng</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Director at ZNO International (Pte.) Limited</span>
                                                <span class="team-member-location">Singapore</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Commodities in the cryptocurrency may be the next move.
                                                As the previous ICO, there is no backing.</p>
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
                                <img src="template/images/George-Wong.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/georgewongtzewen/" target="_blank">
                                        <h3 class="team-member-name">George Wong</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Managing Director at PayX Capital (M) Sdn Bhd</span>
                                        <span class="team-member-location">Kuala Lumpur, Malaysia</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>As a gold silver investor myself, I think it's an interesting idea but the application
                                        must make sense. Does it really need blockchain? I guess that's the main question.</p>
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
                                            <h3 class="team-member-name">George Wong</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Managing Director at PayX Capital (M) Sdn Bhd</span>
                                                <span class="team-member-location">Kuala Lumpur, Malaysia</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>As a gold silver investor myself, I think it's an interesting idea but the application
                                                must make sense. Does it really need blockchain? I guess that's the main question.</p>
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
                                <img src="template/images/Alex-B.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/alexander-konov/" target="_blank">
                                        <h3 class="team-member-name">Alexander Konov</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">International Development Manager at Mediagramer.com</span>
                                        <span class="team-member-location">Nizhny Novgorod Region, Russian Federation</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Well, first of all, the term Digital Silver is associated now with Litecoin in cryptocommunity. But everyone knows that LTC like many others cryptocurrencies are not backed up with any real active.
                                        Recently, the idea of cryptocurrencies which are not volatile and can be easily changed to real things like gold or silver is quite popular and the market goes towards these ideas.
                                        Such projects will definitely bring institutional investors to the market and contribute to the blockchain technology popularization and development.
                                        That's why I think Silverlink has advantage before any other projects and if the marketing approach is chosen wisely it will have a great success for sure!</p>
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
                                            <h3 class="team-member-name">Alexander Konov</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">International Development Manager at Mediagramer.com</span>
                                                <span class="team-member-location">Nizhny Novgorod Region, Russian Federation</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Well, first of all, the term Digital Silver is associated now with Litecoin in cryptocommunity. But everyone knows that LTC like many others cryptocurrencies are not backed up with any real active.
                                                Recently, the idea of cryptocurrencies which are not volatile and can be easily changed to real things like gold or silver is quite popular and the market goes towards these ideas.
                                                Such projects will definitely bring institutional investors to the market and contribute to the blockchain technology popularization and development.
                                                That's why I think Silverlink has advantage before any other projects and if the marketing approach is chosen wisely it will have a great success for sure!</p>
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
                                <img src="template/images/Eli-Bordun.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/eli-bordun-18b16ba3/" target="_blank">
                                        <h3 class="team-member-name">Eli Bordun</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Blockchain Consultant at Ambisafe</span>
                                        <span class="team-member-location">San Francisco Bay Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Regarding silver, it's definitely interested to discuss this. We have digitalized similar assets before for our clients.</p>
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
                                            <h3 class="team-member-name">Eli Bordun</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Blockchain Consultant at Ambisafe</span>
                                                <span class="team-member-location">San Francisco Bay Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Regarding silver, it's definitely interested to discuss this. We have digitalized similar assets before for our clients.</p>
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
                                <img src="template/images/Sharon-Henley.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/sharonhenley/" target="_blank">
                                        <h3 class="team-member-name">Sharon Henley</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Strategic Thinker & Growth Hacker for Blockchain Start-Ups at Blockchain Agent</span>
                                        <span class="team-member-location">London, United Kingdom</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Well I brought RMG to the world and our next steps would be silver and platinum. Silver is more accessible than gold. 1g gold is $45 while 1g silver is pennies.</p>
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
                                            <h3 class="team-member-name">Sharon Henley</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Strategic Thinker & Growth Hacker for Blockchain Start-Ups at Blockchain Agent</span>
                                                <span class="team-member-location">London, United Kingdom</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Well I brought RMG to the world and our next steps would be silver and platinum. Silver is more accessible than gold. 1g gold is $45 while 1g silver is pennies.</p>
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
                                <img src="template/images/Adam-Koltun.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/adamkoltun/" target="_blank">
                                        <h3 class="team-member-name">Adam Koltun</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Business Strategist at The Quantum Resistant Ledger</span>
                                        <span class="team-member-location">Greater Chicago Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Certainly, for people that are looking to leverage their precious metal holdings, tokenization holds a lot of promise and depending on how the silver was tokenized, how those tokens were priced/distributed, and a few other factors, it could be a very successful venture.</p>
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
                                            <h3 class="team-member-name">Adam Koltun</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Business Strategist at The Quantum Resistant Ledger</span>
                                                <span class="team-member-location">Greater Chicago Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Certainly, for people that are looking to leverage their precious metal holdings, tokenization holds a lot of promise and depending on how the silver was tokenized, how those tokens were priced/distributed, and a few other factors, it could be a very successful venture.</p>
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
                                <img src="template/images/Rudresh-Solanki.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/rudreshsolanki97/" target="_blank">
                                        <h3 class="team-member-name">Rudresh Solanki</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Blockchain Developer at Sardar Patel Institute of Technology</span>
                                        <span class="team-member-location">Mumbai, Maharashtra, India</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think it's a great idea as it links a token to something of real value, hence making
                                        a better more regulated token.</p>
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
                                            <h3 class="team-member-name">Rudresh Solanki</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Blockchain Developer at Sardar Patel Institute of Technology</span>
                                                <span class="team-member-location">Mumbai, Maharashtra, India</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think it's a great idea as it links a token to something of real value, hence making
                                                a better more regulated token.</p>
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
                    <!-- End member -->
                    <div class="col-md-3 mb-20 team-tile">
                        <div class="team-tile-content">
                            <div class="member-head">
                                <img src="template/images/Rakesh-Khamkar.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/rakesh-khamkar-8b6556ba/" target="_blank">
                                        <h3 class="team-member-name">Rakesh Khamkar</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Project Management at University of Bedfordshire</span>
                                        <span class="team-member-location">United Arab Emirates</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It has a great future ahead cz most people are searching for a stable crypto coins and silver would be one of them in near future. That’s what I feel.</p>
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
                                            <h3 class="team-member-name">Rakesh Khamkar</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Project Management at University of Bedfordshire</span>
                                                <span class="team-member-location">United Arab Emirates</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It has a great future ahead cz most people are searching for a stable crypto coins and silver would be one of them in near future. That’s what I feel.</p>
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
                                <img src="template/images/Rhonda-Eldridge.jpg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/rhonda-eldridge-cpa-ca-89040913/" target="_blank">
                                        <h3 class="team-member-name">Rhonda (McDeigan) Eldridge</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder at Harness All Possibilities Inc. (HAP)</span>
                                        <span class="team-member-location">Greater New York City Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>If people belief something has value and that value can be traded or hold its value
                                        than any asset (including gold and silver) can be tokenized or back led by something that has shown over time to have a stable value.</p>
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
                                            <h3 class="team-member-name">Rhonda (McDeigan) Eldridge</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder at Harness All Possibilities Inc. (HAP)</span>
                                                <span class="team-member-location">Greater New York City Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>If people belief something has value and that value can be traded or hold its value
                                                than any asset (including gold and silver) can be tokenized or back led by something that has shown over time to have a stable value.</p>
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
                                <img src="template/images/Akshat-Doshi.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/akshatdoshi/" target="_blank">
                                        <h3 class="team-member-name">Akshat Doshi</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Blockchain Developer</span>
                                        <span class="team-member-location">California State University-Sacramento
                                        San Francisco Bay Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It's great idea to make silver as decentralized transperent trusted system.
                                        I like this idea. We can do number of things with this. It will solve worlds largest problem and also regulates the silver distribution so every person the earth know who owns how much silver in world. Blue blood diamond issue can also be solve with this solution. Great idea. Love it.</p>
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
                                            <h3 class="team-member-name">Akshat Doshi</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Blockchain Developer</span>
                                                <span class="team-member-location">California State University-Sacramento
                                        San Francisco Bay Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It's great idea to make silver as decentralized transperent trusted system.
                                                I like this idea. We can do number of things with this. It will solve worlds largest problem and also regulates the silver distribution so every person the earth know who owns how much silver in world. Blue blood diamond issue can also be solve with this solution. Great idea. Love it.</p>
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
                                <img src="template/images/Himanshu-Goyal.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/himanshu-goyal-4869299b/" target="_blank">
                                        <h3 class="team-member-name">Himanshu Goyal</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Full Stack Developer at Block Gemini</span>
                                        <span class="team-member-location">Bengaluru, Karnataka, India</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>According to me silver token is way to transfer your money in form of token on blockchain and you can redeem token in future based price of silver. Instead of giving back you feat money they will parcel the silver with 4% processing fees</p>
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
                                            <h3 class="team-member-name">Himanshu Goyal</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Full Stack Developer at Block Gemini</span>
                                                <span class="team-member-location">Bengaluru, Karnataka, India</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>According to me silver token is way to transfer your money in form of token on blockchain and you can redeem token in future based price of silver. Instead of giving back you feat money they will parcel the silver with 4% processing fees</p>
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
                                <img src="template/images/Afrikanus-Kofi.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/afrikanus-kofi-akosah-adusei-ba25aa88/" target="_blank">
                                        <h3 class="team-member-name">Afrikanus Kofi</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">President, Africa Blockchain University XinFin Organisation</span>
                                        <span class="team-member-location">Rwanda</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Organizing Meet-ups for the crypto community and business people and libertarians who believe in precious metals as an option to protect your wealth.
                                        Interesting. I'm a big time believer of gold and silver</p>
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
                                            <h3 class="team-member-name">Afrikanus Kofi</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">President, Africa Blockchain University XinFin Organisation</span>
                                                <span class="team-member-location">Rwanda</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Organizing Meet-ups for the crypto community and business people and libertarians who believe in precious metals as an option to protect your wealth.
                                                Interesting. I'm a big time believer of gold and silver</p>
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
                                <img src="template/images/Adarsh-S.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/adarshsunil/" target="_blank">
                                        <h3 class="team-member-name">Adarsh S</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">PhD Research Scholar at Kerala Blockchain Academy</span>
                                        <span class="team-member-location">Quilon Area, India</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It's very much possible as any physical asset backed token.</p>
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
                                            <h3 class="team-member-name">Adarsh S</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">PhD Research Scholar at Kerala Blockchain Academy</span>
                                                <span class="team-member-location">Quilon Area, India</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It's very much possible as any physical asset backed token.</p>
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
                                <img src="template/images/Julius-Michael.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/julius-michael-9409a865/" target="_blank">
                                        <h3 class="team-member-name">Julius Michael</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Business Development Specialist at Simon Fraser University</span>
                                        <span class="team-member-location">Vancouver, British Columbia, Canada</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think tokenizing silver would make it easier for investors to invest in silver and make more accessible for more traders and investors.</p>
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
                                            <h3 class="team-member-name">Julius Michael</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Business Development Specialist at Simon Fraser University</span>
                                                <span class="team-member-location">Vancouver, British Columbia, Canada</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think tokenizing silver would make it easier for investors to invest in silver and make more accessible for more traders and investors.</p>
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
                                <img src="template/images/Pekka-Kelkka.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/pekkakelkka/" target="_blank">
                                        <h3 class="team-member-name">Pekka Kelkka</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Blockchain Business Consultant at University of Joensuu, Finland</span>
                                        <span class="team-member-location">United Arab Emirates</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I'm a big supporter of real asset-backed Blockchain projects. Silver fits definitely in this category. Blockchain and Cryptos will also revolutionize the commodities markets.</p>
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
                                            <h3 class="team-member-name">Pekka Kelkka</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Blockchain Business Consultant at University of Joensuu, Finland</span>
                                                <span class="team-member-location">United Arab Emirates</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I'm a big supporter of real asset-backed Blockchain projects. Silver fits definitely in this category. Blockchain and Cryptos will also revolutionize the commodities markets.</p>
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
                                <img src="template/images/Ernest-M.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/mbenkum/" target="_blank">
                                        <h3 class="team-member-name">Ernest Mbenkum</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder & CEO at Fintech Ltd</span>
                                        <span class="team-member-title">Senior Advisor at Africa Blockchain Alliance</span>
                                        <span class="team-member-location">Toronto, Canada Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It is a great idea, but you will need to have the physical silver kept safe for audits.</p>
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
                                            <h3 class="team-member-name">Ernest Mbenkum</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder & CEO at Fintech Ltd</span>
                                                <span class="team-member-title">Senior Advisor at Africa Blockchain Alliance</span>
                                                <span class="team-member-location">Toronto, Canada Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It is a great idea, but you will need to have the physical silver kept safe for audits.</p>
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
                                <img src="template/images/Leandro-Franca-de-Mello-updated.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/leandrofrancademello/" target="_blank">
                                        <h3 class="team-member-name">Leandro França de Mello</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">CEO at CryptoWatch</span>
                                        <span class="team-member-location">Rio de Janeiro, Rio de Janeiro, Brazil</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I believe that all assets around the world can be tokenized and I'm strenght to believe that commodities market will be preferential choice to tokenization.</p>
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
                                            <h3 class="team-member-name">Leandro França de Mello</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">CEO at CryptoWatch</span>
                                                <span class="team-member-location">Rio de Janeiro, Rio de Janeiro, Brazil</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I believe that all assets around the world can be tokenized and I'm strenght to believe that commodities market will be preferential choice to tokenization.</p>
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
                                <img src="template/images/Doug-Miller.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/doug-miller-%E5%A4%9A%E5%BC%98-3367181/" target="_blank">
                                        <h3 class="team-member-name">Doug Miller</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Co-founder Assist Technology at ConsenSys</span>
                                        <span class="team-member-location">Greater Seattle Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I am a big silver collector and fan, I have worked with Gold IRA's and gold backed bitcoin so I agree silver would be a good business idea, the market will be a little smaller but definitly a niche market.</p>
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
                                            <h3 class="team-member-name">Doug Miller</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Co-founder Assist Technology at ConsenSys</span>
                                                <span class="team-member-location">Greater Seattle Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I am a big silver collector and fan, I have worked with Gold IRA's and gold backed bitcoin so I agree silver would be a good business idea, the market will be a little smaller but definitly a niche market.</p>
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
                                <img src="template/images/Susheel-Pathania.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/susheelpathania/" target="_blank">
                                        <h3 class="team-member-name">Susheel Pathania</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Ground Zero at Guru Nanak Dev University</span>
                                        <span class="team-member-location">New Delhi, Delhi, India</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Good idea it is. It will be an asset backed token and give lot of credibility. There are similar ICOs already existing in the market. Please do some more research. Lot of metal traders do intend to tokenize.</p>
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
                                            <h3 class="team-member-name">Susheel Pathania</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Ground Zero at Guru Nanak Dev University</span>
                                                <span class="team-member-location">New Delhi, Delhi, India</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Good idea it is. It will be an asset backed token and give lot of credibility. There are similar ICOs already existing in the market. Please do some more research. Lot of metal traders do intend to tokenize.</p>
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
                                <img src="template/images/Nikolay-Shkilev.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/icoadvisor/" target="_blank">
                                        <h3 class="team-member-name">Nikolay Shkilev</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Entrepreneur</span>
                                        <span class="team-member-location">Saint Petersburg, Russian Federation</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It's good idea. Asset backed need to Blockchain industry.</p>
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
                                            <h3 class="team-member-name">Nikolay Shkilev</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Entrepreneur</span>
                                                <span class="team-member-location">Saint Petersburg, Russian Federation</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It's good idea. Asset backed need to Blockchain industry.</p>
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
                                <img src="template/images/Peter-Gregory.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/petergregory21/" target="_blank">
                                        <h3 class="team-member-name">Peter Gregory, CIM</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">National Sales Director, Coin Capital Investment Management</span>
                                        <span class="team-member-location">Toronto, Ontario, Canada</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I see asset backed tokens as a viable business model if done properly.</p>
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
                                            <h3 class="team-member-name">Peter Gregory, CIM</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">National Sales Director, Coin Capital Investment Management</span>
                                                <span class="team-member-location">Toronto, Ontario, Canada</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I see asset backed tokens as a viable business model if done properly.</p>
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
                                <img src="template/images/Wei-Liang.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/wei-liang-4266aa137/" target="_blank">
                                        <h3 class="team-member-name">Wei Liang</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Founder at TokenX</span>
                                        <span class="team-member-location">Singapore</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>It's like silver version of usdt then.</p>
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
                                            <h3 class="team-member-name">Wei Liang</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Founder at TokenX</span>
                                                <span class="team-member-location">Singapore</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>It's like silver version of usdt then.</p>
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
                                <img src="template/images/Kyle-Geralds.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/kyle-geralds-51690363/" target="_blank">
                                        <h3 class="team-member-name">Kyle Geralds</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Cryptocurrency Specialist at Bitcoin IRA</span>
                                        <span class="team-member-location">Los Angeles, California</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>I think it’s a terrific idea and ultimately would be an ideal, trust-less money, if done
                                        properly. What is most important with such an idea is the mechanics of the physical backing with the silver and the delivery mechanism should someone elect to convert to the physical, underlying, hard asset (the silver). Meaning; the physical silver would need to exists in an environment (platform) that’s free from all counter party risks, easily and cost effectively convertible in both directions.</p>
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
                                            <h3 class="team-member-name">Kyle Geralds</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Cryptocurrency Specialist at Bitcoin IRA</span>
                                                <span class="team-member-location">Los Angeles, California</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>I think it’s a terrific idea and ultimately would be an ideal, trust-less money, if done
                                                properly. What is most important with such an idea is the mechanics of the physical backing with the silver and the delivery mechanism should someone elect to convert to the physical, underlying, hard asset (the silver). Meaning; the physical silver would need to exists in an environment (platform) that’s free from all counter party risks, easily and cost effectively convertible in both directions.</p>
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
                                <img src="template/images/Dhana.jpg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/we-love-technologies/" target="_blank">
                                        <h3 class="team-member-name">Dhana Timilsina</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">CEO & Founder at International Blockchain Technology Inc</span>
                                        <span class="team-member-location">San Francisco, California</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>The whole idea of crypto and Blockchain is decentralization.
                                        But lately due to heavy speculation and scams this market fall apart.
                                        For silver, gold, or dollar........backed crypto is new idea in this industry.</p>
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
                                            <h3 class="team-member-name">Dhana Timilsina</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">CEO & Founder at International Blockchain Technology Inc</span>
                                                <span class="team-member-location">San Francisco, California</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>The whole idea of crypto and Blockchain is decentralization.
                                                But lately due to heavy speculation and scams this market fall apart.
                                                For silver, gold, or dollar........backed crypto is new idea in this industry.</p>
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
                                <img src="template/images/Mark-Travis.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/mark-travis-1a2a3a1/" target="_blank">
                                        <h3 class="team-member-name">Mark Travis</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Performance Engineer at Ripple</span>
                                        <span class="team-member-location">San Francisco Bay Area</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>ETF iShares SLV.</p>
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
                                            <h3 class="team-member-name">Mark Travis</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Performance Engineer at Ripple</span>
                                                <span class="team-member-location">San Francisco Bay Area</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>ETF iShares SLV.</p>
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
                                <img src="template/images/Nehemiah-Isamotu.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/nehemiah-isamotu-76a16b94/" target="_blank">
                                        <h3 class="team-member-name">Nehemiah Isamotu</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Content Creator at KuBitX Exchange</span>
                                        <span class="team-member-location">Nigeria</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>There's already gold backed crypto so why no Silver?</p>
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
                                            <h3 class="team-member-name">Nehemiah Isamotu</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Content Creator at KuBitX Exchange</span>
                                                <span class="team-member-location">Nigeria</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>There's already gold backed crypto so why no Silver?</p>
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
                                <img src="template/images/Bradley-Wu.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/bradley-wu-b681b893/" target="_blank">
                                        <h3 class="team-member-name">Bradley Wu</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Portfolio Manager at Binance</span>
                                        <span class="team-member-location">Honolulu, Hawaii</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>This is a well circulated topic of interest as of recently. Have you heard of
                                        Digix Dao? They actually have a similar product that is backed by gold. It's a good idea, however there are some long term limitations and similar challenges that this idea runs into if simply looking at it from leveraging the silver or gold.</p>
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
                                            <h3 class="team-member-name">Bradley Wu</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Portfolio Manager at Binance</span>
                                                <span class="team-member-location">Honolulu, Hawaii</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>This is a well circulated topic of interest as of recently. Have you heard of
                                                Digix Dao? They actually have a similar product that is backed by gold. It's a good idea, however there are some long term limitations and similar challenges that this idea runs into if simply looking at it from leveraging the silver or gold.</p>
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
                                <img src="template/images/John-Njui-Kirumba.jpeg">
                            </div>
                            <div class="member-content">
                                <header class="team-member-header">
                                    <a href="https://www.linkedin.com/in/john-njui-kirumba/" target="_blank">
                                        <h3 class="team-member-name">John Njui Kirumba</h3>
                                    </a>
                                    <div class="team-member-meta">
                                        <span class="team-member-title">Property Manager</span>
                                        <span class="team-member-location">Kenya</span>
                                    </div>
                                </header>
                                <div class="team-member-bio">
                                    <p>Silver backed crypto might be an alternative to stablecoins. The real beauty is that its backed by an actual valuable metal.
                                        Stablecoins are backed by fiat that is no longer backed by gold.
                                        So, it could attract users.</p>
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
                                            <h3 class="team-member-name">John Njui Kirumba</h3>
                                            <div class="team-member-meta">
                                                <span class="team-member-title">Property Manager</span>
                                                <span class="team-member-location">Kenya</span>
                                            </div>
                                        </header>
                                        <div class="team-member-card-content">
                                            <p>Silver backed crypto might be an alternative to stablecoins. The real beauty is that its backed by an actual valuable metal.
                                                Stablecoins are backed by fiat that is no longer backed by gold.
                                                So, it could attract users.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End member -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

@stop
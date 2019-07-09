@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h2><span style="text-transform: uppercase; color: #fff">Development Roadmap</span><br>The Silverlink Network Vision</h2>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>

    <section class="road-map pt-120">
        <div class="content">
            <div class="container">
                <div class="col-lg-12">
                        <ul class="roadmap">
                            <li>
                                <div class="roadmap-blue-circle">
                                    <img src="template/images/upc-year-circle.png"><span>2017</span>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-badge"><span>Q3</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>UI design for portal and platform, end-user oriented</li>
                                            <li>Silver token staking goes live</li>
                                            <li>Alpha platform UI starts to be built</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted">
                                <div class="roadmap-badge"><span>Q4</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>Linking Desk program for individuals and medium small sized business</li>
                                            <li>The Silverlink Network advertises blockchain investments</li>
                                            <li>DApps and internal decentralized management solutions</li>
                                            <li>Decentralized workflow for company is promoted among key channels</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-blue-circle">
                                    <img src="template/images/upc-year-circle.png?v=3.1.0"><span>2018</span>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-badge"><span>Q1</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>Decentralized Token Trading is live</li>
                                            <li>Multiple backed Tokens inside decentralized Token Engine can be traded</li>
                                            <li>Several organizations trade their value on our Silver Trading Engine</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q2</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>Silverlink Network signs agreement with important companies, distributors of precious metals</li>
                                            <li>Link portfolio is diversified with extra commodities being integrated into platform such as Gold and Palladium (Testing)</li>
                                            <li>Minter Smart Contract in testing</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mmrt-100">
                                <div class="roadmap-badge"><span>Q3</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>Admin Panel to manage orders approval and redemption</li>
                                            <li>Transaction history toggeable to show only transactions from log-in account/address</li>
                                            <li>Available Tokens-Indicators displaying amount of tokens available to to be purchased via direct-buy</li>
                                            <li>Silver Price prediction using latest AI algorithms.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q4</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>Interface to view certificates hosted in decentralized cloud system.</li>
                                            <li>Decentralized User-to-User exchange enabling instant buy Silver Token for ETH in secondary and decentralized market.</li>
                                            <li>In Dapp client side generation of public and private key pair acting as User account</li>
                                            <li>In Dapp send function for ETH and Silver Token.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-blue-circle">
                                    <img src="template/images/upc-year-circle.png?v=3.1.0"><span>2019</span>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-badge"><span>Q1</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>Lending Vault integration allowing User to peform User-to-User loans in exchange of interest rates.</li>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to North America</li>
                                            <li>Leverage Trading Integration-Silverlink will enable trading against silver spot price with in a leveraged volume.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q2</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Accomplishments</h4>
                                        <ul class="rm-completed-list">
                                            <li>New website will feature improved design and user experience</li>
                                            <li>The New Growth Stage Whitepaper v2 will portray and put into perspective the grand vision of the SLVone ecosystem</li>
                                            <li>Provide more technical sections for tech savvy people</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mmrt-100">
                                <div class="roadmap-badge"><span>Q3</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Presale on New Growth Stage</li>
                                            <li>List token on DEXs and several big CEXs</li>
                                            <li>SWAP function is live</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q4</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Get Certificate at Silver Bullion Singapore</li>
                                            <li>Upgrade Minter Smart Contract on Production Version Ready v2</li>
                                            <li>Silver Token SLR is minted and traded on Production Version Ready v2</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-blue-circle">
                                    <img src="template/images/upc-year-circle.png?v=3.1.0"><span>2020</span>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-badge"><span>Q1</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Redemption function is live</li>
                                            <li>Get Certificate at Salt Lake City Bullion Vault</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q2</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Mainsale on New Growth Stage</li>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to South East Asia</li>
                                            <li>Link portfolio is diversified with extra commodities being integrated into platform such as Gold and Palladium.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mmrt-100">
                                <div class="roadmap-badge"><span>Q3</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to North East Asia</li>
                                            <li>Trading Silver Bullion on Mobile</li>
                                            <li>$SLV repurchase and burn in the second quarter of 2020</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q4</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to South Asia</li>
                                            <li>Upgrade Production Version Ready v3</li>
                                            <li>Silver Token SLR is minted and traded on Production Version Ready v3</li>
                                            <li>$SLV repurchase and burn in the third quarter of 2020</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-blue-circle">
                                    <img src="template/images/upc-year-circle.png?v=3.1.0"><span>2021</span>
                                </div>
                            </li>
                            <li>
                                <div class="roadmap-badge"><span>Q1</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Get Certificate at Sydney Custodian Vaults</li>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to Australia</li>
                                            <li>$SLV repurchase and burn in the fourth quarter of 2020</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q2</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Get Certificate at London Silver Vaults</li>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to Europe</li>
                                            <li>Upgrade Production Version Ready v4</li>
                                            <li>Silver Token SLR is minted and traded on Production Version Ready v4</li>
                                            <li>$SLV repurchase and burn in the first quarter of 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mmrt-100">
                                <div class="roadmap-badge"><span>Q3</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Get Certificate at SWP Cayman Island</li>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to North & South America</li>
                                            <li>$SLV repurchase and burn in the second quarter of 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="roadmap-inverted mmrt-100">
                                <div class="roadmap-badge"><span>Q4</span></div>
                                <div class="roadmap-panel">
                                    <div class="roadmap-body">
                                        <div class="left-corners"></div>
                                        <div class="right-corners"></div>
                                        <h4>Projections</h4>
                                        <ul>
                                            <li>Get Certificate at Johannesburg Silver Vault</li>
                                            <li>Silver Gateway Partnerships-Silver Bullion is delivered to Africa</li>
                                            <li>$SLV repurchase and burn in the third quarter of 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')   

@stop
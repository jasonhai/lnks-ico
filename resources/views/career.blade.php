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
                <h2>Jobs</h2>
                <p>Do you want to join SLV Crew and be a part of a great diversified team? <br>
                    Look through the list of currently available jobs at SLV and apply!</p>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
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
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Senior UI Designer</h2>
                            </a>
                            <div class="job-position">
                                SINGAPORE & REMOTE | MARKETING AND COMMUNICATIONS
                            </div>
                            <div class="job-description">
                                <p>We are looking for a qualified Senior UI Designer to join our team. The Senior UI Designer will be responsible for desktop responsive web sites and mobile after that.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Senior Product Designer</h2>
                            </a>
                            <div class="job-position">
                                SINGAPORE & REMOTE | SOFTWARE DEVELOPMENT
                            </div>
                            <div class="job-description">
                                <p>Our team is looking for a passionate Senior Product Designer to join us in building clean and enjoyable products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Core / Back-End JavaScript Developer</h2>
                            </a>
                            <div class="job-position">
                                REMOTE | SOFTWARE DEVELOPMENT
                            </div>
                            <div class="job-description">
                                <p>We are looking for a passionate Backend Node.js Developer to join our Development Team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Decentralized Application Engineer – Blockchain</h2>
                            </a>
                            <div class="job-position">
                                REMOTE | SOFTWARE DEVELOPMENT
                            </div>
                            <div class="job-description">
                                <p>We are looking for a passionate blockchain developer to join our Development Team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Full-stack Ethereum dApp Developer</h2>
                            </a>
                            <div class="job-position">
                                REMOTE | SOFTWARE DEVELOPMENT
                            </div>
                            <div class="job-description">
                                <p>Our team is looking for a passionate Full-stack Ethereum dApp Developer. The Full-stack Ethereum dApp Developer, will be responsible for coding and modifying dApps running on the Ethereum software, from layout to function and according to developer’s assigned…</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Blockchain Engineer</h2>
                            </a>
                            <div class="job-position">
                                SINGAPORE & REMOTE | SOFTWARE DEVELOPMENT
                            </div>
                            <div class="job-description">
                                <p>We are looking for passionate C++ engineers to join our team in Singapore and remote. You will be responsible for helping design, develop, and execute the Ethereum software and other future decentralized projects, and to coordinate with the rest…</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">Junior UX Designer</h2>
                            </a>
                            <div class="job-position">
                                SINGAPORE & REMOTE | SOFTWARE DEVELOPMENT
                            </div>
                            <div class="job-description">
                                <p>We are looking for several Junior UX Designer to assist in designing web and native applications with a focus on clean beautiful user experiences in our office in Singapore. Be part of a design-centric culture that focuses on solving…</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-40">
                        <div class="job-content pb-20">
                            <a href="#">
                                <h2 class="job-name m-0">What other positions are you considering?</h2>
                            </a>
                            <div class="job-position">
                                SINGAPORE & REMOTE I OTHER POSITIONS
                            </div>
                            <div class="job-description">
                                <div>Join SLV.one and our mission to create a worldwide digital solution.</div>
                                <p>Please send your CV or any documents, a cover email telling us more about yourself, and a portfolio (if applicable) to support@slv.one</p>
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
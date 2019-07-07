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
                <header class="text-center pt-20 headbg2 section-header">
                    <small>TEAM</small>
                    <h2>Together, we can do anything !!!<span class="background_heading_2">Together, we can do anything</span></h2>
                    <hr>
                </header>

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/brian~vo/">
                                <img src="template/images/brian.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/brian~vo/">
                                    <h2 class="avatar-member-name">Brian Vo</h2>
                                </a>
                                <div class="avatar-member-position">
                                    CHIEF EXECUTIVE OFFICER
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>I am blockchain researcher and business strategist with a passion for financial empowerment. I am also passionate about the intersection of
                                finance, technology, innovative businesses models, especially asset backed token platforms and decentralized exchanges.		</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/phan-minh-hai-85a34a57/">
                                <img src="template/images/jason.png">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/phan-minh-hai-85a34a57/">
                                    <h2 class="avatar-member-name">Jason Hai</h2>
                                </a>
                                <div class="avatar-member-position">
                                    CHIEF TECHNOLOGY OFFICER
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Jason Hai has a lot of experience in PHP and Server. Technology is always change, He thinks that blockchain will be the best tool for any transactions in the near future.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://github.com/ethlink">
                                <img src="template/images/daniel.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://github.com/ethlink">
                                    <h2 class="avatar-member-name">Daniel Mendoza</h2>
                                </a>
                                <div class="avatar-member-position">
                                    FOUNDER
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>He has 6 years of experience in blockchain and crypto currency technology, the first thing he considered amazing about blockchain technology was its ability to truly change the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://github.com/superkarolis">
                                <img src="template/images/kalos.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://github.com/superkarolis">
                                    <h2 class="avatar-member-name">Karolis Ramanauskas</h2>
                                </a>
                                <div class="avatar-member-position">
                                    Lead Developer
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Karolis Ramanauskas, a graduate of BSc Computer Science at Lancaster University. His current focus is on researching and understanding blockchains, and how they can be used for the most positive impact.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/samuel-mark-reid/">
                                <img src="template/images/SAMUEL.jpeg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/samuel-mark-reid/">
                                    <h2 class="avatar-member-name">SAMUEL REID</h2>
                                </a>
                                <div class="avatar-member-position">
                                    SENIOR BLOCKCHAIN DEVELOPER
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>My passion for science, mathematics, and high technology entreneurship has led me to invent, develop, and commercialize a variety of
                                technology with a present focus on energy systems, aerospace defense systems, and blockchain/tangle systems.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/map01/">
                                <img src="template/images/Michael-Anthony.jpg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/map01/">
                                    <h2 class="avatar-member-name">MICHAEL ANTHONY</h2>
                                </a>
                                <div class="avatar-member-position">
                                    BUSINESS DEVELOPMENT MANAGER
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Michael is an experienced Marketing Manager & Business Development Specialist with a demonstrated history of working in the Blockchain & Financial
                                services industries. Michael is skilled in Microsoft Office, Data Analysis, Cryptocurrency/Blockchain, and Content Marketing. Michael is a strong
                                marketing professional and graduated from Villanova University with a Bachelor's Degree in Economics.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/pavel-bobek-372377169/">
                                <img src="template/images/pavel-bobek.jpeg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/pavel-bobek-372377169/">
                                    <h2 class="avatar-member-name">PAVEL BOBEK</h2>
                                </a>
                                <div class="avatar-member-position">
                                    SENIOR CORE/BACKEND JAVASCRIPT DEVELOPER
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Pavel is a full-stack web developer with 10 years of industry experience. 
Pavel is proficient in both frontend and backend web programming languages, and He has implemented applications with the following technologies:
MEAN/MERN/MVRN Stack (MongoDB, ExpressJS, ReactJS, Angular.js, Vue.js, NodeJs)
PHP (Laravel, Symfony, CodeIgniter, Yii).</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/kevinwwright/">
                                <img src="template/images/kevin-wrigh.jpeg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/kevinwwright/">
                                    <h2 class="avatar-member-name">KEVIN WRIGHT</h2>
                                </a>
                                <div class="avatar-member-position">
                                    PROFESSIONAL BLOCKCHAIN PRODUCT DEVELOPMENT
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>Worked the globe in both startups and large scale multinationals, searching for the ultimate business adventures and product development challenges.
 Currently working remotely, focused on dashboard, IoT, blockchain product development, and WordPress development.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="avatar-content pb-20">
                            <a href="https://www.linkedin.com/in/arpitvaish/">
                                <img src="template/images/arpit-vaish.jpeg">
                            </a>
                            <div class="avatar-member-bio">
                                <a href="https://www.linkedin.com/in/arpitvaish/">
                                    <h2 class="avatar-member-name">ARPIT VAISH</h2>
                                </a>
                                <div class="avatar-member-position">
                                    TECHNICAL ADVISOR
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="avatar-info">
                            <h2>
                                Background
                            </h2>
                            <p>They are a web development studio located in India. They specialize in web development, cloud computing (office 365, Azure, SharePoint, AWS) and hybrid mobile
 app development. The team always strive to get an astonishing website to clients around the world.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')   

@stop
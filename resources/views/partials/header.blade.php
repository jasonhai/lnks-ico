<header id="header" class="topbar {{ Request::is('/')?'home':'page' }}">
    <h1 id="logo"><a class="topbar-brand" href="{{ url('/') }}"><img src="template/images/lnks/logo.png" alt="Home"></a></h1>
    <nav id="nav" class="topbar-nav">
        <ul>
            <li><a class="nav-link" href="{{ url('/smart-contract') }}">SMART CONTRACT</a></li>
            <li><a class="nav-link" href="{{ url('/careers') }}">CAREERS</a></li>
            <li><a class="nav-link" href="{{ url('road-map') }}">ROADMAP</a></li>
            <!-- <li><a class="nav-link" href="{{ url('/extra-information') }}">EXTRA INFORMATION</a></li> -->
            <li><a class="nav-link" href="{{ url('/board-of-markers') }}">BOARD OF MAKERS</a></li>
            <li><a class="nav-link" href="{{ url('/testimonials') }}">TESTIMONIALS</a></li>
            <li><a class="nav-link" href="{{ url('/documents') }}">DOCUMENTS</a></li>
            <li><a class="nav-link login" href="{{ url('/login') }}">LOG IN</a></li>
            <li><a class="nav-link btn button primary btn-primary" href="{{ url('/register') }}">KYC</a></li>
        </ul>
    </nav>
</header>
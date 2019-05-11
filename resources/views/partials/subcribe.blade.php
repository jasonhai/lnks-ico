<section id="five" class="wrapper style2 special fade">
    <div class="container">
        <header>
            <h2>Join our newsletter</h2>
            <p>Drop your email address to receive all the information from SLV team.</p>
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
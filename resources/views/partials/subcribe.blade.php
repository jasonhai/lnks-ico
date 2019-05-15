<section id="five" class="wrapper style2 special subribe-section">
    <div class="container">
        <header>
            <h2>Join our newsletter</h2>
            <p>Drop your email address to receive all the information from SLV team.</p>
        </header>
        <form method="post" action="{{ url('subscriber') }}" class="cta">
            {{ csrf_field() }}
            <div class="row gtr-uniform gtr-50">
                <div class="col-md-8"><input type="email" class="form-control" required name="email" id="email" placeholder="Your Email Address" /></div>
                <div class="col-md-4 btn-submit-subcribe"><input type="submit" value="Get Started" class="btn-dark btn btn-general" /></div>
            </div>
        </form>
    </div>
</section>
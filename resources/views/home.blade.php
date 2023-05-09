@extends('layouts.app')

@section('content')


<div class="container-fluid hero-section">
    <section class="home-banner gray-bg">
        <div class="container">
            <div class="row full-screen align-item-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="banner-text">
                        <h5 class="font-alt">Welcome!</h5>
                        <h1 class="font-h1">TECH HUB</h1>
                        <p>Are thrilled to offer you a seamless and personalized 
                            shopping experience for your computer needs. Our platform offers a wide range of budget-friendly 
                            options that ensure everyone can find a computer that fits their needs without compromising on quality.
                            Our team of researchers has worked hard to provide you with trustworthy and reliable information about
                            each product, enabling you to make informed decisions when purchasing a computer. Enjoy browsing our user-friendly 
                            website, and don't hesitate to contact our customer support team for any assistance you may need. Thank you for choosing 
                            our platform for your computer shopping needs!</p>
                            <div class="feedback-container">
                            <button class="feedback-button" onclick="window.location.href='/login'">Get Started</button>
                            </div>
                    </div>
                </div>
                <div class="banner-img col-lg-6 order-lg-2 order-1 d-md-none d-sm-none d-none d-lg-block">
                    <img src="img/banner-image.png" class="img-fluid" alt="img">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
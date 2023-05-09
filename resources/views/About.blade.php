@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  </head>
  <body>
    <section class="about-us">
      <div class="about slide-in">
        <div class="text slide-in">
          <h2>About Us</h2>
          <p>TechHub is an e-commerce website that aims to provide a personalized and convenient computer 
            shopping experience for everyone. The project is designed to help customers find the right computer that fits
            their needs and budget through proper recommendations. TechHub's goal is to revolutionize the computer shopping 
            experience by providing a platform that offers personalized recommendations, affordable prices, and secure transactions. 
            With TechHub, customers can trust that they are getting the best computer for their needs without the risk of falling for scams.</p>
        </div>
        <div class="pic slide-in">
          <img src="{{ asset('img/About.png') }}" alt="TechHub team">
        </div>
      </div>
    </section>

    <section class="mission">
      <div class="about slide-in">
        <div class="text slide-in">
          <h2>Mission</h2>
          <p>Our mission is to provide high-quality computer parts and accessories to our customers, enabling them to build 
            and upgrade their systems with confidence. We strive to offer a comprehensive selection of reliable and innovative 
            products, coupled with exceptional customer service, technical expertise, and competitive pricing. We aim to be the 
            go-to destination for computer enthusiasts, professionals, and businesses seeking top-notch components for their computing needs.</p>
        </div>
        <div class="pic slide-in">
          <img src="{{ asset('img/Mission.png') }}" alt="TechHub team">
        </div>
      </div>
    </section>

    <section class="vission">
      <div class="about slide-in">
        <div class="text slide-in">
          <h2>Vission</h2>
          <p>Our vision is to foster a community of passionate computer users and empower them to realize their technological aspirations. We aspire to be a 
            trusted and reliable source of cutting-edge computer parts, catering to the ever-evolving demands of the digital world. We envision ourselves as a hub for knowledge, 
            where customers can access expert advice, stay informed about the latest trends, and make informed decisions about their computer hardware investments. Ultimately, 
            we aim to fuel innovation, productivity, and enjoyment through our products and services, contributing to the advancement of the technology landscape.</p>
        </div>
        <div class="pic slide-in">
          <img src="{{ asset('img/Vission.png') }}" alt="TechHub team">
        </div>
      </div>
    </section>

    <section class="team">
      <div class="names">
        <h2>FOUNDING TEAM </h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="{{ asset('img/loyd.jpg') }}" alt="John Lloyd Agapito">
              </div>
              <h3 class="title">John Lloyd Agapito</h3>
              <span class="post">Web Developer</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="{{ asset('img/ray.jpg') }}" alt="Ray Anthony Gases">
              </div>
              <h3 class="title">Ray Anthony Gases</h3>
              <span class="post">Web Developer</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </body>
</html>
@endsection

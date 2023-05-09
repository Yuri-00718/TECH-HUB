@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="{{ asset('css/Contact-form.css') }}">
  <div class="container">
    <div class="image fadein">
      <img src="img/Contact-us.png" alt="Contact Us Image">
    </div>
    <div class="form slidein">
      <header>
        <h1>Contact Us</h1>
        <p>Get in touch with TECH HUB for all your tech-related queries and concerns. Our team is always ready to assist you.</p>
      </header>
      @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="" method="">

        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your name.." required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Your email.." required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Write your message here.." style="height:200px" required>{{ old('message') }}</textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
  @endif

  @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
  @endif

  <script>
    // add loaded class to body to trigger animation
    document.body.classList.add('loaded');

    // slide in form on page load
    const form = document.querySelector('.form');
    form.classList.add('slidein');
    
    // fade in image on page load
    const image = document.querySelector('.image');
    image.classList.add('fadein');
  </script>
@endsection

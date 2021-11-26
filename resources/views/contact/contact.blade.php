@extends('layouts/main')
@section('content')



   <div class="container blog">
      <h1 class="title blog" style="font-size: 8rem">Sweet Cuisine</h1>  
      <h2 class="subTitle blog">Contact</h2>
   </div>

  @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach

<div class="contact-container">

    <form action="/getContactData"  class="subscribe-form"  method="post">
        
        @csrf
        @if(Session::has('message'))
        <p class="subscribe-session">{{ Session::get('message') }}</p>
        @endif
        <label for="Name">Name:</label>
        <input class="subscribe_input" type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <label for="Email">Email:</label>
        <input class="subscribe_input" type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <label for="YourMessage">Your Message:</label>
        <textarea class="subscribe_input-placeholder"  id="your_message" name="your_message" rows="4" cols="50" placeholder="your message"></textarea>
      
        <div class="subsrcibe-button">
            <button class="btn-contact"> 
                <span data-text="S">S</span>
                <span data-text="U">U</span>
                <span data-text="B">B</span>
                <span data-text="M">M</span>
                <span data-text="I">I</span>
                <span data-text="T">T</span>
            </button>
        </div>
    </form>
    <div class="space-between__sub"  >

    </div>
    <!-- left bar -->
    <div class="carousel-onTheRight-sub_log">
        <h4 class="recipes-all-recipes-sub_log">Fresh and zesty </h4>
        <div class="recipe-rightSite-container">
            <h3 class="recipe-rightSite-search">SEARCH RECIPES</h3>
            <p class="recipe-rightSite-menu">
                <strong>
                    BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                    GLUTEN FREE
                </strong>
            </p>
            <a>
                <a href="/recipes"><p>ALL RECIPES</p></a>
            </a>
            <p>
                <strong>━━━━━━⤞●⤝━━━━━━</strong>
            </p>

            <img
                class="recipe-rightSite-img"
                src="/img/Capture.PNG"
                alt="us"
            />

            <p>
                <strong>Hello, we're Gloria and Katarina.</strong>
            </p>
            <p>
                We love to eat, travel, cook, and eat some more! We
                created this recipe website from scratch during the
                coding Bootcamp Praha 2021. As an example we used
                www.loveandlemons.com and all our recipes are from
                www.bbcgoodfood.com.
            </p>
            <p>
                <strong>━━━━━━⤞●⤝━━━━━━</strong>
            </p>
            <div>
           <a href="https://www.facebook.com/Katkas.Cakes.Ilkley"><img class="recipe-icon-right" src="/img/Icons/fb.png" /></a>
        <img class="recipe-icon-right" src="/img/Icons/twitter.png" />
        <a href="https://www.instagram.com/katkas.cakes/"><img class="recipe-icon-right" src="/img/Icons/instagram.png" /></a>     

            </div>
        </div>
    </div>
</div>

@endsection
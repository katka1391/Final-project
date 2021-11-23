@extends('layouts/main')
@section('content')



   <div class="container register">
      <h1 class="title register" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle register">Register Page</h2>
   </div>
   
  @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach

<div class="register-container">


    <form  class="register-form" action="{{ route('register') }}" method="post">
        @csrf
        <label for="Name">Name:</label>
        <input class="register_input" type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <label for="Email">Email:</label>
        <input class="register_input" type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <label for="Paswoord">Paswoord:</label>
        <input class="register_input" type="password" name="password" placeholder="password" value="">
        <label for="Paswoord-confirmation">Confirmation:</label>
        <input class="register_input" type="password" name="password_confirmation" placeholder="password_confirmation">

        <button class="btn-register"> 
            <span data-text="R">R</span>
            <span data-text="E">E</span>
            <span data-text="G">G</span>
            <span data-text="I">I</span>
            <span data-text="S">S</span>
            <span data-text="T">T</span>
            <span data-text="E">E</span>
            <span data-text="R">R</span>
            <span data-text="!">!</span>
        </button>
    </form>
    <div class="space-between__reg"  style="margin-right: 20px;">

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
                <img
                    class="recipe-icon-right"
                    src="/img/Icons/fb.png"
                />
                <img
                    class="recipe-icon-right"
                    src="/img/Icons/twitter.png"
                />
                <img
                    class="recipe-icon-right"
                    src="/img/Icons/instagram.png"
                />
            </div>
        </div>
    </div>
</div>

@endsection
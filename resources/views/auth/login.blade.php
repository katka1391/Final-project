@extends('layouts/main')
@section('content')


   <div class="container blog">
      <h1 class="title blog" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle blog">Login Page</h2>
   </div>

   @foreach ($errors->all() as $error)
   <div class="error">{{ $error }}</div>
@endforeach

<div class="login-container">
    <form class="login-form" action="{{ route('login') }}" method="post">
        @csrf
        <p class="login-notRegister" >Not register yet? Go to the <a href="/register">register</a> page</p>
        <label for="Username">Email or Username:</label>
        <input class="login_input" type="email" name="email" value="{{ old('email') }}">
        <label for="Username">Password:</label>
        <input class="login_input" type="password" name="password" value="">

        <button class="btn-login"> 
            <span data-text="L">L</span>
            <span data-text="O">O</span>
            <span data-text="G">G</span>
            <span data-text="I">I</span>
            <span data-text="N">N</span>
            <span data-text="!">!</span>
        </button>
       
   
    </form>
    <div class="space-between__log"  style="margin-right: 20px;">

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
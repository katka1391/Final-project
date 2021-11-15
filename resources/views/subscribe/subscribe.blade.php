@extends('layouts/main')
@section('content')

@extends('nav/navBar')

   <div class="container blog">
      <h1 class="title blog" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle blog">Subscribe Page</h2>
   </div>
 
<div class="subscribe-container">

    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach

    <form  class="subscribe-form"  method="get">
        @csrf
        <label for="Name">Name:</label>
        <input class="subscribe_input" type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <label for="Email">Email:</label>
        <input class="subscribe_input" type="email" name="email" placeholder="email" value="{{ old('email') }}">

        <button class="btn-subscribe"> 
            <span data-text="S">S</span>
            <span data-text="I">I</span>
            <span data-text="G">G</span>
            <span data-text="N">N</span>
            <span data-text=""></span>
            <span data-text="M">M</span>
            <span data-text="E">E</span>
            <span data-text="!">!</span>
        </button>
    </form>
    <div class="space-between"  style="margin-right: 20px;">

    </div>
    <!-- left bar -->
    <div class="carousel-onTheRight blog">
        <p class="text-decoration-none" > <a href="" class="text-dark" ><u>Search Recipes</u></a> </p>
        <br>
        <p class="text-decoration-none"> <a href="" class="text-dark"><u>BREAKFAST  /  MAIN DISH  /  DESSERT</u></a> </p>
        <br>
        <p class="text-decoration-none"> <a href="" class="text-dark"><u>VEGAN  /  GLUTEN FREE</u></a> </p>
        <br>
        <br>
        <p  class="text-decoration-none"><a href="" class="text-danger">ALL RECIPES >></a></p>
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <br>
        <p>TAKE A LOOK AT OUR BLOG PAGE...</p>
        <br>
        <br>
        <p class="text-decoration-none"><a href="" class="text-danger">BLOG>></a></p>
    </div>
</div>

@endsection
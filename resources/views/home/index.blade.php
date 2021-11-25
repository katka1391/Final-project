@extends('layouts/main')
@section('content')



<div class="container home">
    <h1 class="title home" style="font-size: 9rem">Sweet Cuisine</h1>     
</div>



<div class="recipe-main-container">
    <div class="recipe-icons-left-panel">
        <a href="https://www.facebook.com/Katkas.Cakes.Ilkley"><img class="recipe-icon" src="/img/Icons/fb.png" /></a>
        <a href="https://www.instagram.com/katkas.cakes/"><img class="recipe-icon" src="/img/Icons/instagram.png" /></a>
        <img class="recipe-icon" src="/img/Icons/twitter.png" />
        {{-- <a href="https://www.instagram.com/katkas.cakes/"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"  class="findMe_icon1"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a> --}}
    </div>

    <div class="recipe-leftSite">
       
                <h4 class="recipes-all-recipes">
                    <strong>Welcome to Sweet Cuisine </strong>
                </h4>    

                <div class="recipe-leftSite-container">
                    <div class="home-recipe__desc">
                        <h3 class="home-frenchtoast">{{$recipes[22]->name}}</h3>
                        <br>
                        <img class="home-img-frenchtoast" src="{{$images[44]->path}}" />
                        <p><a href="/recipes/1">Go to the recipe>>></a></p>
                        <q>{{$recipes[22]->description}}</q>
                        
                    </div>
                </div>
            
        
    </div>

    <div class="recipe-rightSite">
        <h4 class="recipes-all-recipes">Fresh and zesty </h4>
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

                <img
                    class="recipe-icon-right"
                    src="/img/Icons/twitter.png"
                />
                <a href="https://www.instagram.com/katkas.cakes/"><img class="recipe-icon-right" src="/img/Icons/instagram.png" /></a>

            </div>
        </div>
    </div>
</div>

<div class="container home">
    <p class="subTitle-home">You can find more fresh and zesty recipes below</p> 
</div>

<div class="home-container">

    

    <div class="circle">
        <p class="circle__ph">
            more<br/>
            recipes<br/>
            ︾<br/>
        
 
        </p>
    </div>

    <div class="home-btn">
        <div class="home-btn__buttons"><p>RECENT POST</p></div>
        <div class="home-btn__buttons"><p>FAN FAVOURITE</p></div>
    </div>

    <div class="home-down">
        <!---->

        <div class="home-down-recipe__desc">
            <img src="{{$images[0]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[0]->name}}</h4>
            <q>{{$recipes[0]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/1">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[2]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[1]->name}}</h4>
            <q>{{$recipes[1]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/2">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[4]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[2]->name}}</h4>
            <q>{{$recipes[2]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/3">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            
            <img src="{{$images[6]->path}}" />
            <br>
     .
      <div class="home-down-recipe__desc-ph">           
           <h4>{{$recipes[3]->name}}</h4>
            <q>{{$recipes[3]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/4">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[8]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[4]->name}}</h4>
            <q>{{$recipes[4]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/5">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[10]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[5]->name}}</h4>
            <q>{{$recipes[5]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/6">Go to the recipe>>></a></p>    
        </div>
            
        </div><!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[12]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[6]->name}}</h4>
            <q>{{$recipes[6]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/7">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[14]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[7]->name}}</h4>
            <q>{{$recipes[7]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/8">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[16]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[8]->name}}</h4>
            <q>{{$recipes[8]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/9">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[18]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[9]->name}}</h4>
            <q>{{$recipes[9]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/10">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[20]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[10]->name}}</h4>
            <q>{{$recipes[10]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/11">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[22]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[11]->name}}</h4>
            <q>{{$recipes[11]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/12">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[24]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[12]->name}}</h4>
            <q>{{$recipes[12]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/13">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[26]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[13]->name}}</h4>
            <q>{{$recipes[13]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/14">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[28]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[14]->name}}</h4>
            <q>{{$recipes[14]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/15">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[30]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[15]->name}}</h4>
            <q>{{$recipes[15]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/16">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[32]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[16]->name}}</h4>
            <q>{{$recipes[16]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/17">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[34]->path}}" />
            <br>
           
            <div class="home-down-recipe__desc-ph"> 
                <h4>{{$recipes[17]->name}}</h4>
            <q>{{$recipes[17]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/18">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[36]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[18]->name}}</h4>
            <q>{{$recipes[18]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/19">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[38]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[19]->name}}</h4>
            <q>{{$recipes[19]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/20">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[40]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[20]->name}}</h4>
            <q>{{$recipes[20]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/21">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[42]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[21]->name}}</h4>
            <q>{{$recipes[21]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/22">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[44]->path}}" />
            <br>
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[22]->name}}</h4>
            <q>{{$recipes[22]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/23">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[46]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[23]->name}}</h4>
            <q>{{$recipes[23]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/24">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[43]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[24]->name}}</h4>
            <q>{{$recipes[24]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/25">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[50]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[25]->name}}</h4>
            <q>{{$recipes[25]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/26">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[52]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[26]->name}}</h4>
            <q>{{$recipes[26]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/27">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[54]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[27]->name}}</h4>
            <q>{{$recipes[27]->description}}</q>
            <br>
            <br>
            <p><a href="/recipes/28">Go to the recipe>>></a></p>    
        </div>
            
        </div>
       






    </div>









</div>








@endsection
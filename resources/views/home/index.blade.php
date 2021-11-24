@extends('layouts/main')
@section('content')



<div class="container home">
    <h1 class="title home" style="font-size: 9rem">Sweet Cuisine</h1>     
</div>



<div class="recipe-main-container">
    <div class="recipe-icons-left-panel">
        <img class="recipe-icon" src="/img/Icons/fb.png" />
        <img class="recipe-icon" src="/img/Icons/twitter.png" />
        <img class="recipe-icon" src="/img/Icons/instagram.png" />
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
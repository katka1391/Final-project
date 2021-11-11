@extends('layouts/main')
@section('content')

<div class="container blog">
   <h1 class="title blog"style="font-size: 10rem">Sweet Cuisine</h1>  
   <h2 class="subTitle blog">Articles Page</h2>
</div>
<div class="article-container">

    <h2 style="font-size: 40px">Easy Oatmeal Pancakes</h2>
    <div class="article-up">

        <br>
        <q>Pancakes are a form of flatbread made by mixing up a runny batter and ladling the batter onto a hot, greased surface. The batter is allowed to cook until browned on one side before being flipped so that the other side can be cooked, and it can then be served in a variety of ways. Many people think specifically of a thick, sweet variety of flatbread when they hear the word “pancake,” although in fact, they come in quite an array of styles, shapes, and sizes.
        </q>
        <div class="space-between">

        </div>
        <div class="player-container">
            <div class="player">
                <div class="imgBx">
                    <img src="/img/Player/monkey.jpg" alt="monkey"/>
                </div>
                <audio controls autoplay="yes" mobile="yes">
                    <source src="/img/Player/On&On.mp4" type="audio/mp3"/>
                </audio>
            </div>
        </div>
    </div>
    
        <!-- Cards -->
        <div class="container-boxes">
            <div class="boxes">
                <span style="--i:1;"><video src="/img/Pancakes/pancakes.jpg" alt=""></span>
                <span style="--i:2;"><img src="/img/Pancakes/pancakes1.jpg" alt=""></span>
                <span style="--i:3;">
                    <video width="200" height="200" autoplay loop muted>
                    <source src="/img/Pancakes/pancakes2.mp4" type="video/mp4">
                </video> 
               </span>
                <span style="--i:4;"><img src="/img/Pancakes/pancakes3.jpg" alt=""></span>
                <span style="--i:5;">
                    <video width="200" height="200" autoplay loop muted>
                        <source src="/img/Pancakes/pancakes4.mp4" type="video/mp4">
                    </video>                  
                </span>
                <span style="--i:6;"><img src="/img/Pancakes/pancakes5.jpg" alt=""></span>
                <span style="--i:7;"> <video width="200" height="200" autoplay loop muted>
                    <source src="/img/Pancakes/pancakes6v.mp4" type="video/mp4">
                </video></span>
                <span style="--i:8;"><img src="/img/Pancakes/pancakes7.jpg" alt=""></span>
                <span style="--i:9;">
                    <video width="200" height="200" autoplay loop muted>
                        <source src="/img/Pancakes/pancakes8v.mp4" type="video/mp4">
                    </video>              
                </span>
            </div>
        </div>
        
        <div class="article-down">
            <q> The trouble with traditional pancakes is they’re mostly a combination of refined flour and sugar. That means that while delicious, they’re a simple carbohydrate that will cause your blood sugar to spike — giving you a quick burst of energy but leaving you hungry shortly after. Adding a whole grain counters this problem. Oats are full of fiber and are a surprisingly good source of protein (a half cup, uncooked, contained 4 grams of fiber and 6 grams of protein), both of which give you longer-lasting energy. They also lend a few additional vitamins and minerals to each bite, which never hurts.
                In order to ensure the oats don’t mess with the pancakes’ light and fluffy texture, soaking is key. Simply combine rolled oats with milk in your mixing bowl and let them hang out for 10 minutes while you gather your other ingredients. The oats will soften and start to break down, ensuring your pancakes won’t taste too hearty and the oats are easier to digest and absorb.
            </p>    

            </div>
          
</div>
@endsection
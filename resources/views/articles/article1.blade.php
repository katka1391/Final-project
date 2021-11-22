@extends('layouts/main')
@section('content')

<div class="container blog">
   <h1 class="title blog"style="font-size: 10rem">Sweet Cuisine</h1>  
   <h2 class="subTitle blog">Articles Page</h2>
</div>



<div class="article-container">
    <h2 style="font-size: 40px">Instant Pot Fudgy Chocolate Brownies</h2>
    <div class="article-up">
        <br>
        <q>Brownies are an American chocolate dessert made very much like cake, although with slightly different ingredients. They appear to have originated in the late 1880s, either through a happy baking mistake or through calculated work. Unlike cakes, they are not leavened with baking powder, so they are denser and heavier. They are also served in cut squares or bars and are often presented without icing, although they may be served with whipped cream or ice cream.
        There are three basic types of brownies. The first has a cakey texture, with a more flaky crumb. Fudgy ones are incredibly dense, much closer to chocolate fudge than cake, while chewy varieties have a rich, chewy texture that falls somewhere in the middle. The texture is determined by the ratio of chocolate, butter, sugar, and flour in the recipe.
        </q>
        <div class="space-between__art">

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
                <span style="--i:1;"><img src="/img/Brownies/Brownies/brownies3.jpg" alt=""></span>
                <span style="--i:2;"><img src="/img/Brownies/brownies1.jpg" alt=""></span>
                <span style="--i:3;">
                    <video width="200" height="200" autoplay loop muted>
                        <source src="/img/Brownies/browniesv3.mp4" type="video/mp4">
                        </video> 
                    </span>          
                <span style="--i:4;"><img src="/img/Brownies/brownies4.jpg" alt=""></span>
                    <span style="--i:5;">
                        <video width="200" height="200" autoplay loop muted>
                            <source src="/img/Brownies/browniesv1.mp4" type="video/mp4">
                            </video> 
                        </span>    
                        <span style="--i:6;"><img src="/img/Brownies/brownies6.jpg" alt=""></span>
                        <span style="--i:7;">
                            <video width="200" height="200" autoplay loop muted>
                                <source src="/img/Brownies/brownies2v.mp4" type="video/mp4">
                            </video>              
                        </span>                
                <span style="--i:8;"><img src="/img/Brownies/brownies7.jpg" alt=""></span>
            </div>
        </div>
        
        <div class="article-down">
            <q> Typically, ingredients like nuts, dried fruit, and chocolate chunks are added to the dessert to provide extra flavor and texture. Brownies can also be made without chocolate, in a version known as blondies, or they can be marbled with a chocolate and vanilla batter. For an extra rich treat, bakers add things like cream cheese. Most people have a favorite version, ranging from lightweight cakey ones to intensely dark fudge versions.
                The following recipe will yield a batch of dense, chewy brownies. Like other, similar recipes, these can dry out if they are not carefully monitored through the baking process. Cooks should be aware that desserts baked in metal pans will cook more quickly than those in glass.</q>        
        </div>
    
</div>

@endsection
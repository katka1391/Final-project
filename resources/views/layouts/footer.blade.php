<div class="footer-container">
    <footer class="">
        <div class="">

            <div class="footer-icons">
                <a href="https://www.facebook.com/Katkas.Cakes.Ilkley"><img class="recipe-icon-footer" src="/img/Icons/fb.png" /></a>
                <img class="recipe-icon-footer" src="/img/Icons/twitter.png" />
                <a href="https://www.instagram.com/katkas.cakes/"><img class="recipe-icon-footer" src="/img/Icons/instagram.png" /></a>    

            </div>

            <div class="navBar-title">
                <li><a href="/">Home <span></span></a></li>
                <li><a href="/recipes">Recipes <span></span></a></li>
                <li><a href="/subscribe">Subscribe <span></span></a></li>
                <li><a href="/contact">Contact <span></span></a></li>
                <li><a href="/blog">Blog <span></span></a></li>
                <li><a href="/login">Login <span></span></a></li>
                <li><a href="/addRecipe">Add Recipe <span></span></a></li>
                <li><a href="/addRecipe">
                     <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="logout-btn" >Logout</button>
                </form> 
                <span></span></a></li>
            </div>


            <p class="footer-final-text"> © 2021 Final Project, Inc. All rights reserved. Katarina Slivova, Gloria Ragnedda</p>


        </div>
    </footer>
</div>

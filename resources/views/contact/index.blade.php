@extends('layouts/main')
@section('content')

   <div class="container">
      <h1 class="title" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle">Contact</h2>
   </div>

   <div class="contact-container">

      <div class="contact-left-panel">
         <svg class="contact-icons-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style="null" class="icon icons8-Facebook-Filled" >    <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path></svg>
         <svg  class="contact-icons-left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
         </svg>
         <a href="https://instagram.com"><svg  class="contact-icons-left" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"  class="footer_icon1"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>  
      </div>

      
      <form class="contact-form" action="action_page.php">
      
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
         
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
         
            <label for="country">Country you comming from</label>
            <select id="country" name="country">
               <option value="australia">Australia</option>
               <option value="canada">Canada</option>
               <option value="usa">USA</option>
               <option value="italy">Italy</option>
               <option value="france">France</option>
               <option value="slovakia">Slovakia</option>
               <option value="poland">Poland</option>
               <option value="uk">UK</option>
               <option value="others">Others</option>
            </select>

            <label for="lsubject">Subject</label>
            <input type="text" id="lsubject" placeholder="Subject..">
         
            <label for="subject">Your Message</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
         
            <input class="contact-submit" type="submit" value="Submit">
      
      </form>
      

      <div class="contact-right-panel">
         <div class="carousel-onTheRight blog">
            <p class="first-p__cont" class="text-decoration-none" > <a href="" class="text-dark" ><u>Search Recipes</u></a> </p>
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
   </div>




      
@endsection 
      
   






   
   

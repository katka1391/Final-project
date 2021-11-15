@extends('layouts/main')
@section('content')

   <div class="container">
      <h1 class="title" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle">Contact</h2>
   </div>

   <div class="contact-container">

      <div class="contact-left-panel">
            <div><i class="fab fa-facebook fa-2x"></i></div>
            <div><i class="ml-5 fab fa-twitter fa-2x"></i></div>
            <div><i class="ml-5 fab fa-instagram fa-2x"></i></div>   
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
   </div>




      
@endsection 
      
   






   
   

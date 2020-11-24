<?php 
include ('includes/_config.php');
$page_title = "Contact us";
?>





<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include("./includes/head.php"); ?>

<body>
  
  <main>
    
      <!-- Navigation -->
    <?php include("./includes/nav.php"); ?>

      <section class="container ">
        
          <h1>Hire us!</h1>
               
          <h6>Get in touch sooner than later!</h6>
        
      </section>
      
      <section class="form-container">
        
        <form action="https://formspree.io/f/moqpjral" method="POST">
          <div>
            <input type="text" name="name" placeholder="Enter your name">
          </div>
          <div>
            <input type="email" name="_replyto" placeholder="Enter your email">
          </div>
          <div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>
          </div>
          <div>
            <button  type="submit" class="button-1">Submit</button>
          </div>
       </form>
        
      </section>
     
      
      
      <!-- Footer -->
    <?php include("./includes/footer.php"); ?>
    </main>
    
 



</body>
</html>
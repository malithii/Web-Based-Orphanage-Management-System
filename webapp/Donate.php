<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <title>Contact form</title>
    
       <link rel="stylesheet" type="text/css" href="Donation.css">
      <link rel="stylesheet" type="text/css" href="Home.css">
    
  </head>
  <body>
      <div class="con red topBotomBordersOut">
    <div>
    <img src="hand.png" width=70px height=70px style="float:left;position:absolute ;top:10px;left:90px; ">
        <span style="float:left;position:absolute ;top:70px;left:16px;font-family:cursive;font-size:15px; ">
        SRI JINANANDA CHILDRENS'
            <br>
            HOME 
        </span>
    </div>
          
   <a href="Home.php">HOME</a>
  <a href="ways%20to%20help.php">WAYS TO HELP</a>
   <a href="Impact.php">OUR IMPACT</a>
  
  <a href="Contact.php">CONTACT</a>
          
            
      </div>

<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Donation Form</h3>
   
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Donation Amount" type="url" tabindex="4" >
    </fieldset>
    <fieldset>
      <input placeholder="Donation Item" type="url" tabindex="4" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>
    </body>
</html>
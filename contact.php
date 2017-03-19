<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Timm Derrickson | Designer</title>
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans" rel="stylesheet">
    <link href="css/TimmDerrickson_contact.css" rel="stylesheet" type"text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
   <header>
    <div class="headerIconBox">
        <a href="http://facebook.com/timmderrickson"><img src="img/logos/Facebook Icon_abb69e.png" alt="facebook icon" class="headerIcon" id="fbIcon"/></a>
        <a href="http://codepen.io/pens/mypens/"><img src="img/logos/Code Pen Icon_abb69e.png" alt="codepen icon" class="headerIcon"/></a>
    </div>
    <img src="img/logos/TimmDerrickson_logo_abb69e.png" id="td_logo" alt="TimmDerrickson Logo.  Letters T and D encompassed in a circle."/>
    <h1>Timm Derrickson</h1>
    <nav>
        <a href="index.html">Home</a>
        <a href="portfolio.html">Portfolio</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
    </nav>
    <?php
      $realEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
      $name = '';
      $customeremail = '';
      $message = '';
      //$replywanted = isset($_POST['yes']);

      if(isset($_POST['submit'])){
        $ok = true;
       if(!isset($_POST['name']) || $_POST['name'] == ''){
        $ok = false;
      } else {
        $name = $_POST['name'];
      }
      if(!isset($_POST['email']) || $_POST['eremail'] == '' || !preg_match($realEmail,$_POST['email'])){
        $ok = false;
        echo "Pleae submit a real email address";
      } else{
        $customeremail = $_POST['email'];
      }
      if(!isset($_POST['message']) || $_POST['message'] == ''){
        $ok = false;
      } else {
        $message = $_POST['message'];
      }
      if($ok){
        echo "thank you for the intrest in timmderrickson.com <br>";
        /*if($replywanted){
          echo "We look forward to returning your email <br>";
        }*/
        $link = mysqli_connect('localhost', 'root', '', 'timm');

        $name = $_POST['name'];
        $customeremail = $_POST['customeremail'];
        $message = $_POST['message'];
        //$replywanted = isset($_POST['yes']);
        $date = date('Y-m-d');

        $sql = "INSERT INTO contact (name, email, message, date) VALUES ('$name', '$customeremail', '$message', '$date')";
        if($sql){
          echo "Thank You";
        }
        mysqli_query($link, $sql);
      }
    }


     ?>
   </header>
   <div class="flex">
    <div class="contactInfo">
      <p class="contactMe">I would love to hear from you!<br>
        <br>Please contact me here</p>
        <div class="bottomBorderContact"></div>
      <div class="phoneMailEmail">
        <p><a href="tel:1-913-972-6393">(913) 972-6393</a></p></li>
        <p><a href="mailto:tarricktimm@gmail.com?Tarrick%20Inquiry">tarricktimm@gmail.com</a></p>
        <p><a href="www.facebook.com/timmderrickson">Timm Derrickson</a></p>
      </div>
    </div>
    <form class="contactForm">
      <input type="text" name="name" placeholder="name"><br>
      <input  type="text" name="email" placeholder="email"><br>
      <input type="text"  name="message" placeholder="message..." class="messageBox"><br>
      <div class="hearBackFromUs">
        <p>Would you like to hear back from us?</p>
        <input type="checkbox" name="reply" value="yes"> Yes<br>
        <input type="submit" value="Submit">
      </div>
    </form>
   </div>
   <footer>
    <p>&copy; Timm Derrickson 2017</p>
   </footer>
 </body>
</html>

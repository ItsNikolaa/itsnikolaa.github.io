<?php

if (isset($_POST['fname']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['message'])){
    if (!empty($_POST['fname']) && !empty($_POST['country']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $fname = $_POST['fname'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'kindly Provide Valid Email';
          } else {
            $body = $fname."\n".$country."\n".$email."\n".$message;
            if(mail('nikolanedeljkovic.official@gmail.com','Website Response', $body , 'From: response@itsnikola.com')){
                echo 'Hvala sto ste nas kontaktirali.';
            }   else {
                echo 'There is a problem in sending mail.';
            }
        }
 }
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta name="keywords" content="duckplay,srbija,arilje,filmovi,serije,uskoro,2018,itsnikola,designed by itsnikola,duck,play,noljbolji site za gledanje filmova,najbolji,site,za,gledanje,filmova">

    <title>ItsNikola - Kontakt</title>

    <link rel="stylesheet" type="text/css" href="Nav/nav.css" />
    <link rel="stylesheet" type="text/css" href="Footer/footer.css" />
    <link rel="stylesheet" type="text/css" href="Contact/main.css" />
    <link rel="stylesheet" type="text/css" href="Contact/form.css" />
    <link rel="icon" href="Pictures/favicon.png" sizes="256x256" type="image/png">
	</head>
	<body>
    <header>
      <nav>
            <div>
                <h1><a href="/"><img src="Pictures/favicon.png" alt="logo"></a></h1>
            </div>

            <ul>
               <li><a href="/">Pocetna</a></li>
               <li><href="#">&emsp;&emsp;</li>
               <li><href="#">&emsp;&emsp;</li>
               <li><a href=""></a></li>
               <li><href="#">&emsp;&emsp;&emsp;&emsp;</li>
               <li><href="#">&emsp;</li>
               <li><a href="contact.html">Kontakt</a></li>
               <li><href="#">&emsp;&emsp;&emsp;&emsp;</li>
               <li><href="#">&emsp;&emsp;</li>
           </ul>
        </nav>
    </header>
    <div class="space">
    </div>
   <div class="main-header-div">
     <div class="container">

       <form method="post">

         <label for="name">Ime</label>
         <input type="text" id="fname" name="fname" placeholder="Tvoje ime".." required>

         <label for="email">E-mail</label>
         <input type="text" id="email" name="email" placeholder="Tvoja mail adresa" required>

         <label for="country">Zemlja</label>
         <select id="country" name="country" required>
           <option value="srbija">Srbija</option>
           <option value="bosna">Bosna</option>
           <option value="hrvatska">Hrvatska</option>
           <option value="druga">Neka druga...</option>
         </select>

         <label for="subject">Subject</label>
         <textarea id="message" name="message" placeholder="Napisite nesto.." style="height:200px" required></textarea>

         <input type="submit" value="Posalji" >

       </form>
      </div>
    </div>
    <div class="footer-main-div">
      <div class="footer-bottom">
	    <p>&emsp;Copyright &copy; 2018 by:&nbsp; <a href="">ItsNikola</a> &emsp; &emsp;&emsp;&emsp;    Designed by: &nbsp;<a href="https://www.youtube.com/channel/UCNjlCJtf1ylAMyoikfiCbsg" target="_blank">Nikola N.</a></p>
    </div>
    </div>
	</body>
</html>

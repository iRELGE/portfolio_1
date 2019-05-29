<?php include "config.php" ?> 
<!DOCTYPE html>
<html lang="en">


<head>
   

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php echo $lang['title']; ?> </title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    
    Theme URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--header-->
 
  <header  class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav  class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a style="margin-top: -50%;" href="index.html" class="navbar-brand"><img  style="opacity: 0.6" width="50" height="50" src=img/IRLEG-LOGO.png></a>
            </div>
            <div style="margin-top: -1.5%;" class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul  class="nav navbar-nav">
                <li class="active"><a href="#header"><?php echo $lang['Accueil']; ?></a></li>
                <li><a href="#feature"><?php echo $lang['Mes Compétences']; ?></a></li>
                <li><a href="#portfolio"><?php echo $lang['Portfolio']; ?></a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title"><?php echo $lang['Conception et développement Web']; ?></h2>
          <h3 class="title">Rabia Elgouail</h3>
          <h4 class="sub-title"><?php echo $lang['Bienvenue dans mon portefeuille']; ?></h4>
          <button type="button" class="btn btn-submit" data-toggle="modal"data-target="#myModal" ><?php echo $lang['Telecharger CV']; ?></button>
          <button  type="button" class="btn btn-submit" data-toggle="modal" data-target="#myModal2"><?php echo $lang['Regarder CV Vidéo']; ?></button>
        </div>
      </div>
    </div>
    <!--/////-->
     <!--cvbutton1-->
    

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <iframe src="img/cvrabia.pdf" width="550" height="770" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <!--cvbutton2-->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button onclick="playPause()" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        
         <iframe src="http://player.vimeo.com/video/338688423" style="margin-left:-2%" width="600" height="291" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
        </div>
        <div class="modal-footer">
          <button onclick="Pause()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- refont site web -->
  <div class="modal fade" id="myModal3" role="dialog" >
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content"  >
        <div class="modal-header">
          <button onclick="playPause()" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" >
        
         <iframe src="http://localhost/bethany/projet/Youcode_Site_web-master/site/index.html" style="margin-left:-2%" width="590" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
        </div>
        <div class="modal-footer">
          <button onclick="Pause()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- slack -->
  <div class="modal fade" id="myModal4" role="dialog" >
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content"  >
        <div class="modal-header">
          <button onclick="playPause()" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" >
        
         <iframe src="http://localhost/bethany/projet/atelier-flexbox-master-master/index.html" style="margin-left:-2%" width="590" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
        </div>
        <div class="modal-footer">
          <button onclick="Pause()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <!-- RANDONNEE -->
   <div class="modal fade" id="myModal5" role="dialog" >
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content"  >
        <div class="modal-header">
          <button onclick="playPause()" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" >
        
         <iframe src="http://localhost/bethany/projet/challenge-html-css-master-master/index.html" style="margin-left:-2%" width="590" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
        </div>
        <div class="modal-footer">
          <button onclick="Pause()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- prison -->
  <div class="modal fade" id="myModal6" role="dialog" >
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content"  >
        <div class="modal-header">
          <button onclick="playPause()" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" >
        
         <iframe src="https://www.w3schools.com/" style="margin-left:-2%" width="590" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
        </div>
        <div class="modal-footer">
          <button onclick="Pause()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
    
   
     
    
    
  </header>
  <!-- Modal -->

  <!--/ header-->
  <!---->
  <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span><?php echo $lang['Tout est conçu. Peu de choses sont bien conçues.']; ?><span class="dec-tec">”</span> -Rabia Elgouail</h3>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 wow fadeInLeft delay-05s">
          <div class="section-title">
            <h2 class="head-title"><?php echo $lang['Mes Compétences']; ?></h2>
            <hr class="botm-line">
            <p class="sec-para"><?php echo $lang['je suis très passionné par la création des jeux vidéo mobile console PC et webgl en. 2016 j&rsquo;ai commencer une autoformation et ameliorer mes competence en creation des jeux video']; ?>
           </p>
           <p><?php echo $lang['alors j&rsquo;ai choisie unity engine comme moteur de création des jeux et c# 
              et javascript comme un language de programmation j&rsquo;ai créé plusieur jeux mobile PC et 
              webgl et je suis toujours entrain d&rsquo;améliorer mes compétence']; ?>
              </p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><?php echo $lang['Développeur Web']; ?></h3>
              <p class="txt-para"><?php echo $lang['refont des sites web']; ?> </br><?php echo $lang['crée des site web']; ?> </br><?php echo $lang['HTML CSS JAVASCRIPT et PHP.']; ?> </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-picture-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Web designer</h3>
              <p class="txt-para"><?php echo $lang['interface utilisateur graphique Phostoshop ,illustrator']; ?> </br><?php echo $lang['et adobe XD..']; ?> </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-gamepad"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><?php echo $lang['Video Game développeur']; ?></h3>
              <p class="txt-para"><?php echo $lang['développer des jeux video mobile console webgl avec Unity Engine']; ?> </br><?php echo $lang['Java script et c#.']; ?> </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><?php echo $lang['jeux vidéo désigner']; ?></h3>
              <p class="txt-para"><?php echo $lang['interface utilisateur graphique Phostoshop ,illustrator']; ?> </br><?php echo $lang['et mixamo pour les animation 3D.']; ?> </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-align-left"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Code</h3>
              <p class="txt-para">JAVA SCRIPT</br>C#. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-video-camera"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl"><?php echo $lang['Montage vidéo']; ?></h3>
              <p class="txt-para"><?php echo $lang['vidéo promotionnel pour site web game application produit digitale ou physic ...']; ?></br><?php echo $lang['Affter Effect et Final cut pro']; ?>  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <form action="index.php" method="post" role="form" >
  <section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="cta-txt">
            <h3><?php echo $lang['Abonnez-vous']; ?></h3>
            <input type="text" name="emailss" class="form-control" id="namer" placeholder="<?php echo $lang['Votre Email']; ?>" data-rule="minlen:4" data-msg="<?php echo $lang['S&rsquo;il vous plaît entrer au moins 4 caractères']; ?>" />
            
            
            
          </div>
        </div>
        
        <div style="display:flex; flex-direction: row-reverse " class="col-md-4 text-center">
        <form action="index.php" method="post" role="form" >
          <input style="margin-top:10% ; width:200px ; margin-right:-4%" value="<?php echo $lang['Abonnez-vous']; ?>" type="submit" href="#" class="btn btn-submit"></a>
          <div style="margin-top:1% ; margin-right:-100%; Width:500px" class="form-group">
           
          
            <div class="validation"></div>
          </div>
         
        </div>
        
        
      </div>
    </div>
  </section>
  </form>
  <!---->
  <!---->
  <section class="section-padding wow fadeInUp delay-02s" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="section-title">
            <h2 class="head-title">Portfolio</h2>
            <hr class="botm-line">
            <p class="sec-para"><?php echo $lang['veuillez prendre votre temps pour regarder tous mes projets et abonnez-vous pour en voir plus']; ?></p>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <a href="#" data-toggle="modal"data-target="#myModal3"><img href="img/port01.jpg" src="img/port01.jpg" alt="" class="img-responsive"></a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
            <img src="img/port02.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
            <a href="href="#" data-toggle="modal"data-target="#myModal4" ><img src="img/port03.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
            <a href="#" data-toggle="modal"data-target="#myModal5"><img src="img/port04.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
            <a href="https://fb.gg/play/jailbreakirelg" ><img src="img/port05.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
            <a href="https://fb.gg/play/1476954135773436" ><img src="img/port06.jpg" alt="" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black"><?php echo $lang['visitez nous']; ?></h2>
            <hr class="botm-line">
            <p class="sec-para black"><?php echo $lang['N&rsquo;hésitez pas à me contacter où vous voulez.']; ?></p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title"><?php echo $lang['Envoyez-nous un email']; ?></h3>
            <div id="sendmessage"><?php echo $lang['Votre message a été envoyé. Je vous remercie!']; ?></div>
            <div id="errormessage"></div>
            <div class="contact-info">
              <form action="index.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control"  placeholder="<?php echo $lang['Votre Nom']; ?>" data-rule="minlen:4" data-msg="<?php echo $lang['S&rsquo;il vous plaît entrer au moins 4 caractères']; ?>" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email"  placeholder="<?php echo $lang['Votre Email']; ?>" data-rule="email" data-msg="<?php echo $lang['S&rsquo;il vous plaît entrer un valide email']; ?>" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject"  placeholder="<?php echo $lang['Sujet']; ?>" data-rule="minlen:4" data-msg="<?php echo $lang['Veuillez entrer au moins 8 caractères du sujet']; ?>" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Message"placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <input type="submit" value="<?php echo $lang['Envoyer le Message']; ?>" name="submit" class="btn btn-send">
              </form>
            </div>

          </div>
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title"><?php echo $lang['visitez nous']; ?></h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via Principe Amedeo 9, Torino, Italy</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: +212 655 82 39 47</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">rabia.elgouail@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Rabia elgouail - All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->
  <!--contact ends-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
 

</body>
</html>


 
<?php

include'connection.php';
$pdo=$cnx; 
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
  $sname = str_replace(' ', '', $name);
  $subject=$_POST['subject'];
	$email=$_POST['email'];
	
	$message=$_POST['message'];
	
	
	$sql='INSERT INTO contact values(NULL,?,?,?,?,NOW())';
		$q = $pdo->prepare($sql);	
      $q->execute(array($sname,$email,$subject,$message));
      






      $toEmail = 'rabia.elgouail@gmail.com';
                // $subject = 'Contact request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        
                        <h4>Message</h4><p>'.$message.'</p>
                        ';

                        //Email Headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .="Content-Type:text/html;charset=UTF-8" . " \r\n";

                        //additional header
                        $headers .= "from: " .$name. "<".$email.">". "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){
                           //email send
                            $msg = 'email send';
                            $msgClass = 'alert-success';
                        } else {
                            $msg = 'not send';
                            $msgClass = 'alert-danger';

                        }












}else{
	echo "Sf";
}

?>
<?php
   include'connection.php';
   $pdoo=$cnx;
   if (isset($_POST['emailss'])) {
   	$emails=$_POST['emailss'];
   		$sqll='INSERT INTO subscribe values(NULL,?)';
		$qq = $pdoo->prepare($sqll);	
    	$qq->execute(array($emails));

   }
?>
<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  
   
    myVideo.pause(); 
} </script>


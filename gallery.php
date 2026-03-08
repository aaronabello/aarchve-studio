<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,  initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/gallery.css">
    <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
    <title>Gallery | Aarchve Studio</title>
</head>
<body>

    <nav>
        <a href="./index.html" class="brand-logo">
            <img src="./Images/logo.png" alt="Logo" style="height: 4rem;" />
        </a>
            <ul class="links">
                <li class="link"><a href="./homepage.php">Home</a></li>
                <li class="link"><a href="./explore.php">Explore</a></li>
                <li class="link"><a href="./blog.php">Blog</a></li>
                <li class="link"><b> <a href="#"  style="color: #f2870c;">Gallery</a> </b></li>
                <li class="link"><a href="./profile.php">Profile</a></li>
            </ul>
            <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </nav>

        <section class="header">
        <div class="header-content">
            <h1>Enjoy the moments <span class="textHighlight">we capture through every click</span>  wherever we go, photography follows</h1>
            <p>Travel and everyday photography go hand in hand—we find beauty not just in faraway places, but in the simple scenes around us.
                Wherever the journey leads, there's always a story to tell through the lens.

</p>
        </div>
               <a href="#gallery" class="scrollContainer"><button class="scrollButton"><img src="https://img.icons8.com/material-sharp/24/e48111/camera--v2.png"/> <p>View Photos</p> </button></a> 
    
    <div class="custom-shape-divider-bottom-1631284277">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
</section>


<div id="gallery" class="container-fluid">  
  <div class="image">
    <img src="./Images/one.jpeg" class="img-responsive">
    <div class="details">
      The Last Fortress
    </div>
  </div>
  
  <div class="image">
    <img src="./Images/two.jpeg" class="img-responsive">
    <div class="details">
      Intramuros
    </div>
  </div>

  <div class="image">
    <img src="./Images/three.PNG" class="img-responsive">
    <div class="details">
      "The Thinker" imitated by Gio Guitierrez
    </div>
  </div>

  <div class="image">
    <img src="./Images/four.jpeg" class="img-responsive">
    <div class="details">
      Grandeur Within San Augustin
    </div>
  </div>

  <div class="image">
    <img src="./Images/five.jpeg" class="img-responsive">
    <div class="details">
      Alone
    </div>
  </div>

  <div class="image">
    <img src="./Images/six.PNG" class="img-responsive">
    <div class="details">
      De La Salle University
    </div>
  </div>

  <div class="image">
    <img src="./Images/seven.PNG" class="img-responsive">
    <div class="details">
      Banago Tree
    </div>
  </div>

  <div class="image">
    <img src="./Images/eight.PNG" class="img-responsive">
    <div class="details">
      Rango
    </div>
  </div>

  <div class="image">
    <img src="./Images/nine.PNG" class="img-responsive">
    <div class="details">
      "Seated Man" imitated by Eric Yepes
    </div>
  </div>

  <div class="image">
    <img src="./Images/ten.jpeg" class="img-responsive">
    <div class="details">
      Setting Sail at Dusk
    </div>
  </div>

  <div class="image">
    <img src="./Images/eleven.jpeg" class="img-responsive">
    <div class="details">
      Fading Fire, Gentle Tide
    </div>
  </div>

  <div class="image">
    <img src="./Images/twelve.jpg" class="img-responsive">
    <div class="details">
      The Spirit of Envergans
    </div>
  </div>

  <div class="image">
    <img src="./Images/thirteen.PNG" class="img-responsive">
    <div class="details">
      Roriem Olazo
    </div>
  </div>

  <div class="image">
    <img src="./Images/forteen.PNG" class="img-responsive">
    <div class="details">
      "Una Chula II" imitated by Nash Nestor
    </div>
  </div>

  <div class="image">
    <img src="./Images/fifteen.jpeg" class="img-responsive">
    <div class="details">
      Guardian of the Walled City
    </div>
  </div>

  <div class="image">
    <img src="./Images/sixteen.jpg" class="img-responsive">
    <div class="details">
      Circular Perspective
    </div>
  </div>

  <div class="image">
    <img src="./Images/seventeen.jpg" class="img-responsive">
    <div class="details">
      Luffy
    </div>
  </div>

  <div class="image">
    <img src="./Images/eighteen.jpeg" class="img-responsive">
    <div class="details">
      The Silent Witness
    </div>
  </div>

  <div class="image">
    <img src="./Images/nineteen.PNG" class="img-responsive">
    <div class="details">
      Chasing the Last Light
    </div>
  </div>
  <div class="custom-shape-divider-bottom-1631607238">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
</div>

<div class="modal">
  <img src="https://img.icons8.com/ios-filled/50/e48111/close-window.png" class="close"/>
</div>
<div class="content">
      
    </div>
  </div>
</div>

<footer>
            <div class="footerDetails">
                <div class="footerDescription">
                    <div class="footerTitle"><img src="./Images/logo2.png" alt="Logo" style="height: 6rem;" /></div>
                    <p class="footerPara">
                        Each photo tells a story — from quiet street corners to vast landscapes, every shot reveals a perspective worth remembering. 
                    <br/>
                        This blog isn’t just about photography; it’s about freezing moments that speak. Here, you’ll find the stories behind the images, creative insights, and even tips to help you capture your own visual journey.
                    <br/>
                        With a passion for storytelling and a love for the art of the frame, I invite you to explore the world — not by foot, but through focus. Dive into the shots, the lessons, and the little moments that make photography unforgettable.
                    </p>
                </div>

                <div class="footerContact">
                    <h1 class="contactTitle">Contact Me</h1>
                    <p class="contactPara">
                        If you want to make any inquiries, you can contact
                        me through below options
                    </p>
                    <div class="contactOptions">
                    <a
                        href="https://www.facebook.com/aaron.abello.58"
                        target="_blank"
                        class="contactOption">
                        <abbr title="Facebook">
                            <img src="https://img.icons8.com/ios-glyphs/60/ca7717/facebook.png"/>
                        </abbr>
                    </a>
                    <a
                        href="https://www.instagram.com/aaronshmirtzz/"
                        target="_blank"
                        class="contactOption">
                        <abbr title="Instagram">
                            <img src="https://img.icons8.com/material-outlined/48/ca7717/instagram.png"/>
                        </abbr>
                    </a>
                    <div class="contactOption call">
                        <abbr title="+639916440548">
                            <img src="https://img.icons8.com/ios/48/ca7717/phone.png" />
                        </abbr>
                    </div>
                    <a
                        href="mailto:aaronabello336@gmail.com"
                        target="_blank"
                        class="contactOption">
                        <abbr title="Gmail">
                            <img src="https://img.icons8.com/ios/50/ca7717/gmail-new.png" />
                        </abbr>
                    </a>
                    <a
                        href="https://www.tiktok.com/@.jshhwa?is_from_webapp=1&sender_device=pc"
                        target="_blank"
                        class="contactOption">
                        <abbr title="Tiktok">
                            <img src="https://img.icons8.com/ios/50/ca7717/tiktok.png" />
                        </abbr>
                    </a>
                </div>
            </div>
            </div>

            <div class="footerCopyright">
                <p>
                    This website is designed and developed by
                    <span>Aaron Joshua D. Abello</span> for the project for
                    <span>CPE06 - Online Technologies</span>
                </p>
            </div>
        </footer>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

<script src="./JS/gallery.js"></script>
</body>
</html>

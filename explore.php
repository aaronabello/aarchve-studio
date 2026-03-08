<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore | Aarchve Studio</title>
    <link rel="stylesheet" href="./CSS/explore.css">
    <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <nav>
        <a href="./index.html" class="brand-logo">
            <img src="./Images/logo.png" alt="Logo" style="height: 4rem;" />
        </a>
        <ul class="links">
            <li class="link"><a href="./homepage.php">Home</a></li>
            <li class="link"><b><a href="./explore.php" style="color: #f2870c;">Explore</a></b></li>
            <li class="link"><a href="./blog.php">Blog</a></li>
            <li class="link"><a href="./gallery.php">Gallery</a></li>
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
            <h1>WHERE DOES  <span class="textHighlight">YOUR LENS</span>  TAKE YOU?</h1>
            <p>Our photography captures the one thing we always strive to create – breathtaking visual stories. From mastering light and composition to uncovering hidden perspectives, each frame holds a moment worth preserving.</p>
        </div>

        <a href="#places" class="scrollContainer"><button class="scrollButton"><img src="https://img.icons8.com/ios-glyphs/30/e48111/search.png"/> <p>Explore Album</p> </button></a> 
    
        <div class="custom-shape-divider-bottom-1631284277">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <div class="model">
                                                  
    </div>

    <section class="places" id="places">
        <div class="places-content">
            <div class="country">
                <h2 class="title">Album</h2>
                <div class="destinations">
                    <div class="destination" style="background-image: url('./Images/boracaycover.PNG');">
                        <div class="overlay">
                            <h3 class="name">Boracay</h3>
                            <button class="moreInfo" data="Boracay">View</button>
                        </div>
                        
                        <div class="modelContent">
                            <img src="https://img.icons8.com/ios-filled/50/e48111/close-window.png" class="closeButton"/>
    
                            <div class="contentHeader">
                                <div class="images">

                                </div>

                                <div class="details"> 
                        
                                </div>
                            </div>

                            <div class="facts">
                                <h2 class="factTitle">Here are some <span class="factHighlight">fun facts</span>  about</h2>
                                <ul class="factContainer">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="destination" style="background-image: url('./Images/intramuroscover.jpeg');">
                        <div class="overlay">
                            <h3 class="name">Intramuros</h3>
                            <button class="moreInfo" data="Intramuros">View</button>
                        </div>
                    </div>

                    <div class="destination" style="background-image: url('./Images/sunsetcover.jpeg');">
                        <div class="overlay">
                            <h3 class="name">Sunset</h3>
                            <button class="moreInfo" data="Sunset">View</button>
                        </div>
                    </div>


                    <div class="destination" style="background-image: url('./Images/petcover.jpg');">
                        <div class="overlay">
                            <h3 class="name">Pet</h3>
                            <button class="moreInfo" data="Pet">View</button>
                        </div>
                    </div>
                    <div class="destination" style="background-image: url('./Images/naturecover.PNG');">
                        <div class="overlay">
                            <h3 class="name">Nature</h3>
                            <button class="moreInfo" data="Nature">View</button>
                        </div>
                    </div>
                    <div class="destination" style="background-image: url('./Images/streetcover.jpeg');">
                        <div class="overlay">
                            <h3 class="name">Street</h3>
                            <button class="moreInfo" data="Street">View</button>
                        </div>
                    </div>
		            <div class="destination" style="background-image: url('./Images/randomcover.jpg');">
                        <div class="overlay">
                            <h3 class="name">Random</h3>
                            <button class="moreInfo" data="Random">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="custom-shape-divider-bottom-1631607238">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
    </section>
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
    

    <script src="./JS/explore.js"></script>
    <script src="https://kit.fontawesome.com/775344b04d.js" crossorigin="anonymous"></script>
</body>
</html>

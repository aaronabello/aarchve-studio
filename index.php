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
        <link rel="stylesheet" href="./CSS/homepage.css">
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
            integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
            integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
        <title>Aarchve Studio</title>
    </head>

    <body>
        <nav>
            <a href="./index.php" class="brand-logo">
                <img src="./Images/logo.png" alt="Logo" style="height: 4rem;" />
            </a>
            <ul class="links">
                <li class="link">
                    <b> <a href="#" style="color: #f2870c">Home</a> </b>
                </li>
                <li class="link"><a href="./login.php">Explore</a></li>
                <li class="link"><a href="./login.php">Blog</a></li>
                <li class="link"><a href="./login.php">Gallery</a></li>
                <li class="link"><a href="./login.php">Profile</a></li>
            </ul>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
        <section class="headerContainer">
            <div class="headerWrapper">
                <div class="headerInfo">
                    <h1 class="headerTitle">Hello!
                        <span> 
                        </span>
                    </h1>
                    <div class="headerDescription">
                        <b> Each photo is a piece of where I’ve been—and how I saw it.</b> <br> <b>From silent streets to endless skies, I chase moments that speak louder than words.</b> <br>This is my journey—one shot at a time.
                    </div>
                    <a href="#gallery">
                        <button class="headerButton">
                            Explore My
                            <span clss="buttonHighlight">
                                Gallery
                            </span>
                        </button>
                    </a>

                    <div clss="qoute">
                        <h4 class="qouteText">
                            <i>
                                "A camera is a save button for the mind’s eye."
                            </i>
                        </h4>
                        <h4 class="author">- Roger Kingston</h4>
                    </div>
                </div>

                <div class="images">
                    <div
                        class="image wide"
                        style="background-image: url(./Images/firstpic.PNG);">
                    </div>

                    <div 
                        class="image"
                        style="background-image: url(./Images/secondpic.jpg)">
                    </div>

                    <div
                        class="image tall"
                        style="background-image: url(./Images/thirdpic.PNG);">
                    </div>

                    <div
                        class="image"
                        style="background-image: url(./Images/forthpic.PNG);">
                    </div>

                    <div
                        class="image"
                        style="background-image: url(./Images/fifthpic.PNG)">
                    </div>

                    <div
                        class="image wide"
                        style="background-image: url(./Images/sixthpic.PNG);">
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1630587725">
                <svg
                    data-name="Layer 1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill">
                    </path>
                </svg>
            </div>
        </section>

        <section class="best" id="gallery"> 
            <div class="bestWrapper">
                <img src="./Images/leaf.svg" class="bestSVG1" />
                <h1 class="bestTitle" data-aos="fade-up" data-aos-duration="2000">
                    Discover <span class="buttonHighlight">My Best Shots</span>
                </h1>
                <div class="menu-wrapper">
                    <div class="menu">
                        <div class="item">
                            <div class="item-content">
                                <div class="item-image"
                                    style="
                                        background-image: url(./Images/secondpic.jpg);
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        ">
                                    <div class="location">
                                        <img src="./Images/location.png" />
                                        <p class="place">MSEUF Lucena</p>
                                    </div>
                                </div>
                            <div class="placeTitle">The Spirit of Envergans<span></span></div>
                                <div class="placeDescription">
                                    Beneath dramatic skies and towering symbols of pride, the spirit of Envergans shines—resilient, passionate, and unwavering. More than a university, this is a home of brave hearts and bold minds, where every challenge is met with courage, and every dream is pursued with purpose.
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="item-image"
                                    style="
                                        background-image: url(./Images/mangingisda.jpeg);
                                        background-position: center;
                                        background-size: 100%;
                                        background-repeat: no-repeat;
                                        ">
                                    <div class="location"> 
                                        <img src="./Images/location.png" />
                                        <p class="place">Capalonga</p>
                                    </div>
                                </div>
                            <div class="placeTitle">Setting Sail at Dusk<span></span></div>
                                <div class="placeDescription">
                                    A fisherman stands ready in his traditional outrigger boat, silhouetted against a breathtaking sunset. As the last light fades, he prepares to set sail, heading out into the twilight waters for a night of fishing. The scene captures the quiet dedication of a life intertwined with the rhythm of the sea.
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="item-image"
                                    style="
                                        background-image: url(./Images/simbahan.jpeg);
                                        background-position: center;
                                        background-size: 100%;
                                        background-repeat: no-repeat;
                                        ">
                                    <div class="location">
                                        <img src="./Images/location.png" />
                                        <p class="place">San Augustin Church</p>
                                    </div>
                                </div>
                            <div class="placeTitle">Grandeur Within San Agustin<span></span></div>
                                <div class="placeDescription">
                                     Bathed in a soft, reverent light, the interior of San Agustin Church in Intramuros stands as a testament to centuries of faith and history. The intricate details of its vaulted ceiling and the weight of time held within its stone walls invite contemplation, offering a glimpse into the enduring spirit and architectural legacy of this UNESCO World Heritage site.
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-image"
                                style="
                                    background-image: url(./Images/dagat.PNG);
                                    background-position: center;
                                    background-size: 100%;
                                    background-repeat: no-repeat;
                                    ">
                                <div class="location">
                                    <img src="./Images/location.png" />
                                    <p class="place">Boracay</p>
                                </div>
                            </div>
                        <div class="placeTitle">Boracay Bliss at Willy's Rock<span></span></div>
                            <div class="placeDescription">
                                People enjoy the vibrant energy of Boracay's White Beach, with the iconic Willy's Rock standing prominently in the shallow waters. Traditional sailboats dot the horizon, and the sun casts a gentle light on the scene, showcasing the tropical beauty and lively atmosphere of this famous Philippine island paradise.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1630600827">
                <svg
                    data-name="Layer 1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25"
                    class="shape-fill">
                </path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5"
                    class="shape-fill">
                </path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill">
                </path>
                </svg>
            </div>
        </section>

        <section class="blogs">
                <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
                    Helpful <span class="buttonHighlight">Blogs</span>
                </h1>
                <div class="blogsContainer">
                    <div class="blogsContent">
                        <div class="blog">
                            <img src="./Images/blogone.jpg"/>
                            <h3 class="blogTitle">
                                5 Ideas To Level Up Your Photography Skills
                            </h3>
                                <a href="login.php">
                                    <button class="readBlog">Read</button>
                                </a>
                        </div>

                        <div class="blog">
                            <img src="https://images.unsplash.com/photo-1626091022888-485eb96c494a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80"/>
                            <h3 class="blogTitle">
                                Everything You Need to Get Started! (Lightroom Classic Starter Guide)
                            </h3>
                                <a href="login.php">
                                    <button class="readBlog">Read</button>
                                </a>
                        </div>

                        <div class="blog">
                            <img src="./Images/blogtwo.jpg"/>
                            <h3 class="blogTitle">
                                BEST CAMERA PHONES 2025
                            </h3>
                                <a href="login.php">
                                    <button class="readBlog">Read</button>
                                </a>
                        </div>
        
                        </div>
                            <a href="login.php">
                                <button data-aos="fade-up" data-aos-duration="2000" class="allBlogs">
                                    Read More
                                </button>
                            </a>
                    </div>

                <div class="funFact" data-aos="fade-up" data-aos-duration="2000">
                    <div class="factContent">
                        <h1 class="funFactTitle">
                            <span class="highlightText">Fun Fact</span> Of the Day
                        </h1>
                        <p class="fact">
                            Cats are one of the most photographed subjects on the internet,
                            because their natural charm make them irresistibly entertaining and shareable.
                        </p>

                        <p class="fact">
                            The most photographed landmark in the world is the 
                            <span class="highlightTextSec">
                                Eiffel Tower</span>
                                , because of its iconic design, and its timeless appeal as a symbol of romance, travel, and culture.
                        </p>
                    </div>
                </div>

                <div class="custom-shape-divider-bottom-1631607238">
                    <svg
                        data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill">
                    </path>
                    </svg>
                </div>
        </section>

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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer">
        </script>
        <script src="./JS/app.js"></script>
    </body>
</html>



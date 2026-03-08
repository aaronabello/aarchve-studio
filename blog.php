<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
    <title>Blog | Aarchve Studio</title>
    <link rel="stylesheet" href="./CSS/blog.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
  </head>
  <body>

    <nav>
      <a href="./index.html" class="brand-logo">
        <img src="./Images/logo.png" alt="Logo" style="height: 4rem;" />
        </a>
      <ul class="links">
        <li class="link"><a href="./homepage.php">Home</a></li>
        <li class="link"><a href="./explore.php">Explore</a></li>
        <li class="link">
          <b> <a href="./blog.php" style="color: #f2870c">Blog</a> </b>
        </li>
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
        <h1>
          The photography stories that will transport you to
          <span class="textHighlight"> breathtaking perspectives</span>
        </h1>
        <p>
          Photographers have a passion for capturing stories, an eye for beauty in every frame, and a deep love for exploring the world through lens.
            Here are some snapshots, photography tips and guides.
        </p>
      </div>
      <a href="#blog" class="scrollContainer"
        ><button class="scrollButton">
          <img src="https://img.icons8.com/ios-filled/50/e48111/book.png" />
          <p>Read</p>
        </button></a
      >
      <div class="custom-shape-divider-bottom-1631284471">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
    </section>

    <section class="blogs">
      <div class="blogsContainer">
        <div class="blog" id="blog">
          <img
            src="./Images/blogone.jpg"
            alt=""
            class="image"
          />
          <div class="content">
            <div class="details">
              <h2>
                5 Ideas To Level Up Your Photography Skills
              </h2>
              <p>
                So, you're keen to learn this beautiful art of photography, but what can you do to practice those photography skills? You need a challenge, and a focus. In this blog I’m going to give you five ideas to push your skills forward and make your photography great. Within those five ideas, I’m also going to give you three brilliant tips to help you execute them.
              </p>
            </div>

            <div class="buttons">
              <a href="./BlogPages/fiveideas.php"
                ><button class="viewButton">Read</button></a
              >
              <p class="date">15 May 2025</p>
            </div>
          </div>
        </div>

        <div class="blog">
          <img
            src="https://images.unsplash.com/photo-1626091022888-485eb96c494a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80"
            alt=""
            class="image"
          />
          <div class="content">
            <div class="details">
              <h2>
                Everything You Need to Get Started! (Lightroom Classic Starter Guide)
              </h2>
              <p>
                In this blog, I’m going to show you everything you need to know to get started with Lightroom Classic. I’ll be covering the basics of the interface, how to import your photos, and how to edit them. I’ll also be sharing some tips and tricks that will help you get the most out of this powerful software.
              </p>
            </div>

            <div class="buttons">
              <a href="./BlogPages/everything.php"
                ><button class="viewButton">Read</button></a
              >
              <p class="date">1 March 2024</p>
            </div>
          </div>
        </div>

        <div class="blog">
          <img
            src="./Images/blogtwo.jpg"
            alt=""
            class="image"
          />
          <div class="content">
            <div class="details">
              <h2>
                Best Camera Phones 2025
              </h2>
              <p>
                As a seasoned photography tutor at iPhotography, I’m delighted to delve into a topic that’s close to my heart and highly relevant to many of our members—camera phones.
                <br>
                For our community of budding photographers, many of whom are embracing their passions in semi-retirement, the choice of equipment can greatly influence their journey.
                <br>
                Today, I’ll guide you through the best camera phones of 2025, explaining why these devices might just be the perfect tool for beginners and how they stack up against more traditional cameras like DSLRs and mirrorless systems.
              </p>
            </div>

            <div class="buttons">
              <a href="./BlogPages/bestcamera.php"
                ><button class="viewButton">Read</button></a
              >
              <p class="date">12 April 2022</p>
            </div>
          </div>
        </div>

        <div class="blog">
          <img
            src="./Images/blogthree.jpg"
            alt=""
            class="image"
          />
          <div class="content">
            <div class="details">
              <h2>
                5 Essential Tips for Finding Great Photography Locations
              </h2>
              <p>
               You may be reading this and thinking: I need help finding great photography locations, but I have no idea where to start. How do I make the most of my location scouting? Well, I’ve got you and this blog is going to help A LOT! Location scouting is important for every single photographer. It’s something that takes a lot of time, but in my opinion, it’s a part of the job!
                <br>
                Recommending great, less crowded locations that you have found gives your clients a better experience because you’re guiding them and offering a unique add-on that sets you apart from other photographers. It can be difficult to know where to start if you’re newer or if you just moved to an area that you’re unfamiliar with. When I moved from Tennessee to Colorado, I had to find all of my locations myself. Prime photo locations is such a coveted thing, but I put in the work and found awesome locations using these tips! So let’s dive in.
              </p>
            </div>

            <div class="buttons">
              <a href="./BlogPages/essential.php"
                ><button class="viewButton">Read</button></a
              >
              <p class="date">12 Sep 2020</p>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-shape-divider-bottom-1631607238">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
            class="shape-fill"
          ></path>
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

    <script src="./JS/blog.js"></script>
    <script
      src="https://kit.fontawesome.com/775344b04d.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

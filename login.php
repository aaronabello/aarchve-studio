<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


     <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Account | Aarchve Studio</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #142361 0%, #4d608a 100%);
        overflow-x: hidden;
      }

      html {
        overflow-x: hidden;
        scroll-behavior: smooth;
      }

      /* Back Button Styles */
      .back-button {
        position: fixed;
        top: 30px;
        left: 30px;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.95);
        border: 2px solid #f2870c;
        border-radius: 50px;
        padding: 15px 25px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 1rem;
        color: #142361;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 8px 25px rgba(20, 35, 97, 0.2);
        backdrop-filter: blur(10px);
      }

      .back-button:hover {
        background: linear-gradient(90deg, #f2870c 0%, #ca7717 100%);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(242, 135, 11, 0.4);
      }

      .back-button::before {
        content: "←";
        font-size: 1.2rem;
        font-weight: bold;
        transition: transform 0.3s ease;
      }

      .back-button:hover::before {
        transform: translateX(-3px);
      }

      ::-webkit-scrollbar {
        width: 10px;
        background-color: #4d608a;
      }

      ::-webkit-scrollbar-thumb {
        background-color: #c66f0b;
        border-radius: 2px;
      }

      .register {
        min-height: 100vh;
        background: linear-gradient(135deg, #142361 0%, #4d608a 100%);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem;
        padding-top: 100px; /* Account for back button */
      }

      .register-container {
        display: flex;
        max-width: 1000px; 
        max-height: calc(100vh - 120px); 
        width: 90%; 
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        overflow: hidden; 
        box-shadow: 0 15px 30px rgba(20, 35, 97, 0.2);
        margin: auto; 
      }

      .register-intro {
        flex: 1;
        padding: 3.5rem;
        background: linear-gradient(135deg, #142361 0%, #4d608a 100%);
        color: white;
      }

      .register-intro h1 {
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
        color: #f2870c;
      }

      .register-intro p {
        margin-bottom: 2.5rem;
        line-height: 1.7;
      }

      .photography-tip {
        background-color: rgba(255, 255, 255, 0.15);
        padding: 1.2rem;
        border-radius: 10px;
        display: flex;
        align-items: flex-start;
      }

      .photography-tip img {
        margin-right: 1rem;
      }

      .register-intro,
      .register-form {
        padding: 2rem; 
        flex: 1;
        min-width: 300px; 
        overflow-y: auto; 
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .register-intro h1 {
        font-size: clamp(1.8rem, 3vw, 2.5rem); 
        text-align: center;
      }

      .register-intro p{
        text-align: center;
      }

      .register-form h2 {
        font-size: clamp(1.5rem, 2.5vw, 2rem);
        color: #142361;
        margin-bottom: 2.5rem;
        text-align: center;
      }

      .form-group {
        margin-bottom: 1rem;
      }

      .form-group label {
        display: block;
        margin-bottom: 0.7rem;
        color: #142361;
        font-weight: 500;
      }

      .form-group input {
        margin: 0 auto;
        width: 100%;
        padding: 0.75rem;
        border: 2px solid #d1d9e6;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
      }

      .form-group input:focus {
        border-color: #f2870c;
        outline: none;
        box-shadow: 0 0 0 3px rgba(242, 135, 11, 0.2);
      }

      .password-strength {
        height: 4px;
        background: #eee;
        margin-top: 8px;
        border-radius: 2px;
      }

      .btn {
        background: linear-gradient(90deg, #142361 0%, #4d608a 100%);
        color: white;
        border: none;
        padding: 1.2rem;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1rem;
        display: block;
        margin: 1.5rem auto 0; 
        width: 80%; 
        max-width: 250px; 
      }

      .btn:hover {
        background: linear-gradient(90deg, #f2870c 0%, #ca7717 100%);
        transform: translateY(-2px);
      }

      .links {
        text-align: center;
        color: #4d608a;
        margin-top: 2rem;
      }

      .links button {
        border:none;
        color: #f2870c;
        text-decoration: none;
        font-weight: 500;
        background: none;
        cursor: pointer;
      }

      .login-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #142361 0%, #4d608a 100%);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem;
        padding-top: 100px; /* Account for back button */
      }

      .login-container {
        display: flex;
        max-width: 1000px;
        width: 90%;
        max-height: calc(100vh - 120px);
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(20, 35, 97, 0.3);
      }

      .login-intro {
        flex: 1;
        padding: 2rem;
        background: linear-gradient(135deg, #142361 0%, #4d608a 100%);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow-y: auto;
      }

      .login-intro h1 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #f2870c;
      }

      .login-intro p {
        margin-bottom: 2rem;
        line-height: 1.6;
      }

      .login-form {
        flex: 1;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow-y: auto;
      }

      .login-form h2 {
        font-size: 2rem;
        color: #142361;
        margin-bottom: 2rem;
        text-align: center;
      }

      .register-container, .login-container {
        max-width: 1000px;
        width: 90%;
      }

      .swal2-confirm {
        background-color: #142361 !important;
      }

      /* Responsive adjustments for back button */
      @media (max-width: 768px) {
        .back-button {
          top: 20px;
          left: 20px;
          padding: 12px 20px;
          font-size: 0.9rem;
        }
      }
    </style>
  </head>

  <body> 
    <!-- Back Button -->
    <button class="back-button" onclick="goBack()">Back</button>

    <section class="register">
        <div class="register-container" id="signUp" style="display:none;">
            <div class="register-intro">
                <h1>Join Aarchve Studio</h1>
                <p>Create your account to access exclusive photography content, save your favorite shots, and connect with other photography enthusiasts.</p>
                <div class="photography-tip">
                    <img src="https://img.icons8.com/ios-filled/50/ca7717/compact-camera.png" alt="Camera icon"/>
                    <p><em>Photography Tip:</em> When composing your shot, remember the rule of thirds - place your subject along the intersections of imaginary lines dividing your frame into thirds.</p>
                </div>
            </div>
      
            <form class="register-form" id="registerForm" method="post" action="register.php">
            <h2>Create Account</h2>
        
            <div class="form-group">
                <label for="fName">First Name</label>
                <input type="text" id="fName" name="fName" placeholder="Enter your first name" required>
            </div>
        
            <div class="form-group">
                <label for="lName">Last Name</label>
                <input type="text" id="lName" name="lName" placeholder="Enter your last name" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
                <div class="password-strength"></div>
            </div>

            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                <div class="password-strength"></div>
            </div>
        
            <button type="submit" class="btn" name="signUp">Register</button>
        
            <div class="links">
                <p>Already have an account? </p>
                <button type="button" id="signInButton">Sign in here</button>
            </div>
            
            </form>
        </div> 
    </section>

    <section class="login-section" >
        <div class="login-container" id="signIn" style="display: flex;">
            <div class="login-intro">
                <h1>Unlock Creative Inspiration</h1>
                <p>Welcome to Aarchve Studio! Sign in to explore my photography portfolio, discover techniques behind each shot, and access exclusive tutorials to elevate your own photography skills. </p>
                <div class="photography-tip">
                    <img src="https://img.icons8.com/ios-filled/50/ca7717/compact-camera.png" alt="Camera icon"/>
                    <p><em>Photography Tip:</em> The best light for portraits is often during "golden hour" - the first hour after sunrise and the last hour before sunset.</p>
                </div>
            </div>
        
            <form class="login-form" id="loginForm" method="post" action="register.php">
                <h2>Sign In</h2>
          
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="text" id="loginEmail" name="email" placeholder="Enter your email" required>
                </div>
          
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>
                </div>
                          
                <button type="submit" class="btn" name="signIn">Sign In</button>
          
                <div class="links">
                    <p>New to Aarchve Studio? </p>
                    <button type="button" id="signUpButton">Create an account</button>
                </div>
                
            </form>
        </div>
    </section>    

    <script>
      // Back button functionality
      function goBack() {
        if (document.referrer) {
          window.history.back();
        } else {
          // Fallback if no referrer (e.g., direct access)
          window.location.href = 'index.html'; // Change to your homepage URL
        }
      }

      // Form switching functionality
      document.getElementById('signInButton').addEventListener('click', function() {
        document.getElementById('signUp').style.display = 'none';
        document.getElementById('signIn').style.display = 'flex';
        // Scroll to the login form smoothly
        document.getElementById('signIn').scrollIntoView({ 
          behavior: 'smooth', 
          block: 'center' 
        });
      });

      document.getElementById('signUpButton').addEventListener('click', function() {
        document.getElementById('signIn').style.display = 'none';
        document.getElementById('signUp').style.display = 'flex';
        // Scroll to the register form smoothly
        document.getElementById('signUp').scrollIntoView({ 
          behavior: 'smooth', 
          block: 'center' 
        });
      });

      // Show login form by default and scroll to it when page loads
      window.addEventListener('load', function() {
        setTimeout(function() {
          document.getElementById('signIn').scrollIntoView({ 
            behavior: 'smooth', 
            block: 'center' 
          });
        }, 100); // Small delay to ensure page is fully loaded
      });
    </script>
  </body>
</html>
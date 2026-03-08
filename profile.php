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
    <title>Profile | Aarchve Studio</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Poppins", sans-serif;
        overflow-x: hidden;
      }

      html {
        overflow-x: hidden;
        scroll-behavior: smooth;
      }

      ::-webkit-scrollbar {
        width: 10px;
        background-color: #4d608a;
      }

      ::-webkit-scrollbar-thumb {
        background-color: #c66f0b;
        border-radius: 2px;
      }

      nav {
        position: absolute;
        width: 80%;
        left: 10%;
        z-index: 99;
        top: 0;
        height: 100px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        color: #142361;
        border-bottom: 2px solid #4d608a;
        transition: 0.5s all ease-in-out;
      }

      nav.active {
        position: fixed;
        width: 90%;
        left: 5%;
        z-index: 99;
        top: 0;
        height: 60px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        color: #142361;
        border-bottom: 2px solid #4d608a;
        transition: 0.5s all ease-in-out;
        background-color: #ffffff5b;
        backdrop-filter: blur(20px);
        padding: 0 50px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        -webkit-box-shadow: 5px 5px 24px 1px rgba(20, 35, 97, 0.603);
        box-shadow: 5px 5px 24px 1px rgba(20, 35, 97, 0.479);
      }

      .brand-logo {
        font-size: 2.5rem;
        width: 150px;
        font-family: "Pacifico", cursive;
        text-decoration: none;
        color: #142361;
      }

      .links {
        width: 500px;
        display: flex;
        font-size: 1.5rem;
        font-weight: 500;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        list-style: none;
        transition: 0.5s all ease-in-out;
      }

      .links a {
        color: #0f1d57;
        text-decoration: none;
      }

      .link {
        transition: 0.3s all ease;
        cursor: pointer;
      }

      .link:hover {
        color: #e48111;
      }

      .hamburger div {
        width: 30px;
        height: 4px;
        background-color: #fda90b;
        margin-bottom: 4px;
        border-radius: 5px;
        transition: 0.5s all ease;
      }

      .hamburger {
        display: none;
        cursor: pointer;
        margin-right: 20px;
        transition: 0.5s all ease;
      }

      .hamburger.is-active div:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
      }

      .hamburger.is-active div:nth-child(2) {
        opacity: 0;
      }

      .hamburger.is-active div:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
      }

      @media screen and (max-width: 986px) {
        .hamburger {
          display: block;
        }

        .links {
          position: absolute;
          top: -1000px;
          background-color: rgba(255, 255, 255, 0.911);
          backdrop-filter: blur(10px);
          width: 100%;
          height: 450px;
          font-size: 1.5em;
          padding-top: 80px;
          flex-direction: column;
          left: 0;
          justify-content: space-evenly;
          align-items: center;
          border-radius: 10px;
          border-top-left-radius: 0px;
          border-top-right-radius: 0px;
          z-index: -1;
          -webkit-box-shadow: 5px 5px 24px 1px rgba(20, 35, 97, 0.562);
          box-shadow: 5px 5px 24px 1px rgba(20, 35, 97, 0.575);
        }

        .navLinkButton {
          width: 80%;
        }

        .links.active {
          top: 0;
        }

        .brand-logo {
          margin-left: 20px;
        }
      }

      .profile-header {
        height: 50vh;
        background: linear-gradient(135deg,rgb(149, 153, 156) 0%,rgb(102, 121, 197) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: center;
      }

      .profile-header .header-content {
        width: 80%;
      }

      .profile-header h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: white;
      }

      .profile-header p {
        color:rgb(255, 255, 255);
        font-size: 1.2rem;
      }

      .profile-container {
        padding: 50px 0;
        background-color: #f9fcff;
        min-height: 50vh;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;
        flex-wrap: wrap;
      }

      .profile-card {
        width: 45%;
        min-width: 400px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(20, 35, 97, 0.1);
        display: flex;
        flex-direction: column;
        overflow: hidden;
      }

      .avatar-container {
        background-color: #f5f8ff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
      }

      .avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #e48111;
      }

      .profile-info {
        padding: 40px;
      }

      .info-item {
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e0e6f5;
      }

      .label {
        font-weight: 600;
        color: #142361;
        margin-right: 10px;
        font-size: 1.1rem;
      }

      .value {
        color: #4d608a;
        font-size: 1.1rem;
      }

      .bio .value {
        font-style: italic;
        display: inline-block;
        margin-top: 10px;
        line-height: 1.5;
      }

      .logout-btn {
        display: inline-block;
        margin-top: 30px;
        padding: 10px 25px;
        background: linear-gradient(90deg, rgba(20, 36, 94, 1) 0%, rgba(5, 14, 47, 1) 50%, rgba(24, 60, 125, 1) 50%, rgba(9, 23, 50, 1) 100%);
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 500;
        transition: all 0.3s ease;
        background-size: 200%;
        background-position: left;
      }

      .logout-btn:hover {
        background-position: right;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(20, 35, 97, 0.2);
      }

      /* Photo Album Styles */
      .album-card {
        width: 45%;
        min-width: 400px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(20, 35, 97, 0.1);
        padding: 30px;
      }

      .album-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e0e6f5;
      }

      .album-title {
        font-size: 1.8rem;
        color: #142361;
        font-weight: 600;
      }

      .upload-btn {
        background: linear-gradient(135deg, #e48111 0%, #ca7717 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .upload-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(228, 129, 17, 0.3);
      }

      .upload-area {
        border: 2px dashed #e48111;
        border-radius: 10px;
        padding: 40px;
        text-align: center;
        margin-bottom: 30px;
        transition: all 0.3s ease;
        cursor: pointer;
      }

      .upload-area:hover, .upload-area.drag-over {
        border-color: #ca7717;
        background-color: #fff8f0;
      }

      .upload-area.hidden {
        display: none;
      }

      .upload-icon {
        font-size: 3rem;
        color: #e48111;
        margin-bottom: 15px;
      }

      .upload-text {
        color: #4d608a;
        font-size: 1.1rem;
        margin-bottom: 10px;
      }

      .upload-subtext {
        color: #a4b9e7;
        font-size: 0.9rem;
      }

      .photo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 15px;
        margin-top: 20px;
      }

      .photo-item {
        position: relative;
        aspect-ratio: 1;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(20, 35, 97, 0.1);
        transition: all 0.3s ease;
      }

      .photo-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(20, 35, 97, 0.2);
      }

      .photo-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .photo-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
      }

      .photo-item:hover .photo-overlay {
        opacity: 1;
      }

      .delete-btn {
        background: #e74c3c;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: all 0.3s ease;
      }

      .delete-btn:hover {
        background: #c0392b;
      }

      .photo-count {
        color: #4d608a;
        font-size: 0.9rem;
        margin-bottom: 15px;
      }

      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
      }

      .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        max-height: 90%;
      }

      .modal img {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }

      .close-modal {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
      }

      .close-modal:hover {
        color: #e48111;
      }

      @media screen and (max-width: 768px) {
        .profile-container {
          flex-direction: column;
          align-items: center;
        }
        
        .profile-card, .album-card {
          width: 90%;
          min-width: 300px;
        }
        
        .avatar {
          width: 120px;
          height: 120px;
        }
        
        .photo-grid {
          grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
          gap: 10px;
        }
      }

      @media screen and (max-width: 480px) {
        .profile-header h1 {
          font-size: 2.2rem;
        }
        
        .info-item {
          display: flex;
          flex-direction: column;
        }
        
        .label {
          margin-bottom: 5px;
        }
        
        .album-header {
          flex-direction: column;
          gap: 15px;
        }
        
        .upload-area {
          padding: 20px;
        }
      }
    </style>
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
        <li class="link"><a href="./gallery.php">Gallery</a></li>
        <li class="link">
          <b><a href="./profile.php" style="color: #f2870c">Profile</a></b>
        </li>
      </ul>
      <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </nav>

    <section class="profile-header">
      <div class="header-content">
        <h1>Hi, <span class="textHighlight username">
          <?php 
              if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
              while($row=mysqli_fetch_array($query)){
              echo $row['firstName'];
              }
            }
          ?> 
          </span></h1>
        <p>This is your profile page where you can view your account information and manage your photo album.</p>
      </div>
    </section>

    <section class="profile-container">
      <div class="profile-card">
        <div class="avatar-container">
          <img src="./Images/avatar.gif" alt="Animated content" class="avatar">
        </div>
        <div class="profile-info">
          <div class="info-item">
            <span class="label">First Name:</span>
            <span class="value"><span class="value">
            <?php 
              if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
              while($row=mysqli_fetch_array($query)){
              echo $row['firstName'];
              }
            }
            ?> 
            </span></span>
          </div>
          <div class="info-item">
            <span class="label">Last Name:</span>
            <span class="value"><?php 
              if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
              while($row=mysqli_fetch_array($query)){
              echo $row['lastName'];
              }
            }
            ?> </span>
          </div>
          <div class="info-item">
            <span class="label">Email:</span>
            <span class="value"><?php 
              if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
              while($row=mysqli_fetch_array($query)){
              echo $row['email'];
              }
            }
            ?></span>
          </div>
          <div class="info-item bio">
            <span class="label">Bio:</span>
            <span class="value">Photography enthusiast capturing moments that tell stories.</span>
          </div>
          <a href="logout.php" class="logout-btn">Logout</a>
        </div>
      </div>

      <div class="album-card">
        <div class="album-header">
          <h2 class="album-title">My Photo Album</h2>
          <button class="upload-btn" onclick="document.getElementById('fileInput').click()">
            📷 Add Photos
          </button>
        </div>

        <div class="upload-area" id="uploadArea">
          <div class="upload-icon">📸</div>
          <div class="upload-text">Drag & drop photos here</div>
          <div class="upload-subtext">or click "Add Photos" to browse</div>
        </div>

        <input type="file" id="fileInput" multiple accept="image/*" style="display: none;">
        
        <div class="photo-count" id="photoCount">0 photos in your album</div>
        <div class="photo-grid" id="photoGrid"></div>
      </div>
    </section>

    <div id="imageModal" class="modal">
      <span class="close-modal">&times;</span>
      <div class="modal-content">
        <img id="modalImage" src="" alt="Full size photo">
      </div>
    </div>

    <script>
      // Navigation functionality
      const mobileNav = document.querySelector(".links");
      const hamburger = document.querySelector(".hamburger");
      const navbar = document.querySelector("nav");

      hamburger.addEventListener("click", function () {
        mobileNav.classList.toggle("active");
        hamburger.classList.toggle("is-active");
      });

      window.onscroll = function () {
        if (scrollY > 50) {
          navbar.classList.add("active");
        } else {
          navbar.classList.remove("active");
        }
      };

      // Photo Album functionality
      let photos = [];
      const fileInput = document.getElementById('fileInput');
      const uploadArea = document.getElementById('uploadArea');
      const photoGrid = document.getElementById('photoGrid');
      const photoCount = document.getElementById('photoCount');
      const imageModal = document.getElementById('imageModal');
      const modalImage = document.getElementById('modalImage');
      const closeModal = document.querySelector('.close-modal');

      // File input change event
      fileInput.addEventListener('change', function(e) {
        handleFiles(e.target.files);
      });

      // Drag and drop functionality
      uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('drag-over');
      });

      uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('drag-over');
      });

      uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('drag-over');
        handleFiles(e.dataTransfer.files);
      });

      uploadArea.addEventListener('click', function() {
        fileInput.click();
      });

      // Handle file uploads
      function handleFiles(files) {
        for (let file of files) {
          if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
              const photo = {
                id: Date.now() + Math.random(),
                src: e.target.result,
                name: file.name,
                size: file.size,
                type: file.type
              };
              
              photos.push(photo);
              updatePhotoGrid();
              updatePhotoCount();
              
              // Hide upload area if photos exist
              if (photos.length > 0) {
                uploadArea.classList.add('hidden');
              }
            };
            reader.readAsDataURL(file);
          }
        }
      }

      // Update photo grid
      function updatePhotoGrid() {
        photoGrid.innerHTML = '';
        
        photos.forEach(photo => {
          const photoItem = document.createElement('div');
          photoItem.className = 'photo-item';
          photoItem.innerHTML = `
            <img src="${photo.src}" alt="${photo.name}" onclick="openModal('${photo.src}')">
            <div class="photo-overlay">
              <button class="delete-btn" onclick="deletePhoto('${photo.id}')">Delete</button>
            </div>
          `;
          photoGrid.appendChild(photoItem);
        });
      }

      // Update photo count
      function updatePhotoCount() {
        const count = photos.length;
        photoCount.textContent = `${count} photo${count !== 1 ? 's' : ''} in your album`;
        
        // Show upload area if no photos
        if (count === 0) {
          uploadArea.classList.remove('hidden');
        }
      }

      // Delete photo
      function deletePhoto(photoId) {
        if (confirm('Are you sure you want to delete this photo?')) {
          photos = photos.filter(photo => photo.id != photoId);
          updatePhotoGrid();
          updatePhotoCount();
        }
      }

      // Open modal to view full size image
      function openModal(src) {
        modalImage.src = src;
        imageModal.style.display = 'block';
      }

      // Close modal
      closeModal.addEventListener('click', function() {
        imageModal.style.display = 'none';
      });

      // Close modal when clicking outside the image
      imageModal.addEventListener('click', function(e) {
        if (e.target === imageModal) {
          imageModal.style.display = 'none';
        }
      });

      // Close modal with escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && imageModal.style.display === 'block') {
          imageModal.style.display = 'none';
        }
      });
      updatePhotoCount();
    </script>
  </body>
</html>
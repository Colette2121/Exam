<!DOCTYPE html>
<html>
<head>
    <title>milli</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <style>
        body {
        background-color: #000000;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
     }
        html {
        scroll-behavior: smooth;
     }
        .topnav {
        background-color: #787976;
        position: fixed;
        top: 0px;
        left: 0px;
        height: 60px;
        width: 100%;
        z-index: 1000;
        display: flex;
        align-items: center;
        flex-direction: row-reverse;
     }
        .topnav a{
        padding: 14px 16px;
        color: #292828;
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
     }
        .topnav a:hover {
        background-color: #a19b9b;
        color: black;
     }
        .topnav a.active {
        background-color: #919391;
        color: white;
     }
        footer {
        background-color: #777;
        padding: 10px;
        text-align: center;
        color: white;
        width: 100%;
        margin-top: 20px;
     }
     /*===================================================== HOME PAGE =====================================================*/
     img {
        display: block;
        margin: 0 auto;
        margin-top: 40px;
        max-width: 100%;
        height: auto;
     }
        .circle-overlayH {
        position: absolute;
        top: 18%;
        left: 92%;
        transform: translate(-50%, -50%);
        width: 180px; /* Circle size */
        height: 90px;
        border: 2px solid white; /* Thin border */
        border-radius: 50%; /* Makes it a circle */
        background: transparent; /* Transparent inside */
        display: flex;
        align-items: center;
        justify-content: center;
     }

     /* Text inside the circle */
        .circle-overlayH span {
        color: white;
        font-size: 3rem;
        font-weight: 300; /* Thin font */
        font-family: Arial, sans-serif;
        text-align: center;
        line-height: 1.2;
     }
     .text-overlayH {
        position: absolute;
        top: 45%;
        left: 80%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 18rem;
        font-family: "Bebas Neue", sans-serif;
     }

     /* ===== SECTION TITLES ===== */
     .section-title {
        font-family: "Bebas Neue", sans-serif;
        font-size: 3rem;
        color: white;
        text-align: center;
        margin: 40px 0 20px;
        letter-spacing: 2px;
        border-bottom: 3px solid #a83131;
        display: inline-block;
        padding-bottom: 5px;
     }
     .imgtext3{
        font-size: 1.5rem;
        color: #ffffff;
        position: absolute;
        bottom: 10px;
        left: 50px;
        font-family: "Bebas Neue", sans-serif;
        letter-spacing: 2px;
        text-align: justify;
        width: 90%;
     }

    /*===================================================== ALBUM =====================================================*/
    .image-wrapper {
        position: relative;
        display: block;
        width: 100%;
        margin: 0;
    }
    .img5-text {
        position: absolute;
        top: 20px;
        left: 50px;
        color: white;
        font-size: 6rem;
        font-weight: bold;
        font-family: "Bebas Neue", sans-serif;
        text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.9);
        letter-spacing: 3px;
        padding: 10px 20px;  
    }
    .album-row {
        display: flex;
        justify-content: space-around;
        gap: 40px;
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 30px;
    }
    .album-item {
        flex: 1;
        max-width: 220px;
        text-align: center;
        transition: transform 0.3s ease;
        cursor: pointer;
        position: relative;
    }
    .album-item:hover {
        transform: scale(1.08);
    }
    .album-item img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 0;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        display: block;
    }
    .album-item p {
        font-family: 'Abril Fatface', cursive;
        font-size: 1.1rem;
        margin-top: 12px;
        color: #a83131;
        letter-spacing: 1px;
    }
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 4rem;
        color: white;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-shadow: 0 2px 20px rgba(0,0,0,0.8);
        pointer-events: none;
    }
    .album-item:hover .play-button {
        opacity: 1;
    }
    /*===================================================== HITS =====================================================*/
    .hits-container { /*leftcolumncontainer*/
      width: 100%;
      max-width: 1400px; 
      margin: 0 auto;
      padding: 0 0 40px 40px;
    }
    .hits-row { /*position*/
      display: flex;
      align-items: flex-start;
      gap: 1px; /*the gap between the img and the top 5 hits*/
    }
    .hits-left {/* LeftContainer - Title&Playlist */
      flex: 1;
      padding-right: 40px;
      min-width: 300px;
      display: flex;
      flex-direction: column;
    }
      .hits-title { /*Title*/
      font-family: 'Bebas Neue', sans-serif;
      font-size: 3.5rem;
      color: #791010;
      text-align: left;
      letter-spacing: 8px;
      text-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
      padding-bottom: 25px;
      border-bottom: none;
      line-height: 2;
      padding-top: 0;
      margin-top: 30px;
      margin-left:40px;
    }
      .hits-list li { /*TextList*/
      font-family: 'Abril Fatface', cursive;
      font-size: 1.4rem;
      color: #791010;
      padding: 14px 18px;
      margin: 8px 0;
      background: rgba(169, 169, 194, 0.05);
      border-left: 4px solid #791010;
      transition: 0.2s;
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .hits-list li:hover { /*Hover*/
      background: rgba(159, 159, 159, 0.12);
      transform: translateX(8px);
    }
    .hits-list li .hit-number {/*numbers*/
      color: #791010;
      font-weight: bold;
      font-size: 1.2rem;
      min-width: 40px;
    }
    .hits-list li .fa { /*Music icon*/
      color: #ffffff;
      font-size: 1.2rem;
      width: 30px;
    }
    .hits-image { /*pictureframe*/
      flex: 1;
      min-width: 200px;
      max-width: 50%;
      display: flex;
      align-items: stretch;
      margin-right: -40px;
    }
    .hits-image img { /*theActualimage*/
      width: 100%;
      height: 700%;
      object-fit: cover;
      min-height: 450px;
      border-radius: 0;
      display: block;
    }
     /*===================================================== CONTACT =====================================================*/
    .contact {
      max-width: 800px;
      margin: 60px auto 30px;
      padding: 0 20px;
      text-align: center;
    }
    .contact h2 {
      font-family: 'Bebas Neue', cursive;
      font-size: 3rem;
      color: #ffffff;
      border-bottom: 3px solid #791010;
      display: inline-block;
      padding-bottom: 8px;
      margin-bottom: 20px;
    }
    .contact-subtitle {
      font-size: 1.1rem;
      color: #bbb;
      margin-bottom: 25px;
    }
    .contact-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px 40px;
      margin: 20px 0 30px;
    }
    .contact-item {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ddd;
      font-size: 1.2rem;
      background: #1a1a1a;
      padding: 10px 22px;
      border-radius: 40px;
      border: 1px solid #444;
      transition: 0.2s;
    }
    .contact-item:hover {
      background: #2a2a2a;
      border-color: #791010;
      color: #791010;
    }
    .contact-item i {
      font-size: 1.6rem;
      width: 30px;
    }
     /*===================================================== PHP FORM =====================================================*/
    .php-form-area {
      background: #111;
      padding: 25px 20px;
      border-radius: 12px;
      border: 1px solid #333;
      margin: 30px 0 20px;
    }
    .php-form-area form {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px 20px;
      align-items: center;
    }
    .php-form-area label {
      color: #ccc;
      font-weight: bold;
      font-size: 1.1rem;
    }
    .php-form-area input[type="text"] {
      padding: 10px 18px;
      border-radius: 30px;
      border: none;
      background: #222;
      color: white;
      font-size: 1rem;
      min-width: 200px;
    }
    .php-form-area input[type="submit"] {
      background: #791010;
      border: none;
      padding: 10px 30px;
      border-radius: 30px;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      color: #000;
      transition: 0.2s;
    }
    .php-form-area input[type="submit"]:hover {
      background: #791010;
      transform: scale(1.02);
    }
     /*===================================================== MAP =====================================================*/
    .map-container {
      margin: 30px auto;
      max-width: 700px;
      border-radius: 12px;
      overflow: hidden;
      border: 2px solid #333;
    }
    .map-container iframe {
      width: 100%;
      height: 250px;
      border: 0;
      display: block;
    }
     /*===================================================== Events =====================================================*/
    .content-wrapper { /* Container that holds both image and text */
      display: flex;
      align-items: flex-start;
      gap: 30px;
      margin-bottom: 40px;
      margin-left: 40px;
      margin-right: 40px;
    }
    .image-container4 img {
        width: 100%;    /* ADD THIS - makes image fill container */
        height: auto;
        display: block;
    }
    .text-content {
        flex: 0 0 40%;
        max-width: 40%;
        display: flex;              
        flex-direction: column;     /* stacks h1 and p vertically */
        justify-content: center;    
        align-items: center;        
        text-align: center;         
    }
    .text-content p {
        margin: 0;
        font-size: 1.2rem;
        line-height: 1.6;
        color: #333;
        padding-bottom: 80px;
        padding-top: 50px;
    }
    .text-content p2 {
        margin: 0;
        font-size: 1.2rem;
        line-height: 1.6;
        color: #333;
        text-align: justify;   
        width: 100%; 
    }
    .text-content h1 {
        margin-bottom: 15px;         
        font-size: 5rem;       
        line-height: 1.2;
        color: #791010;  
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 6px;
        text-shadow: 0 0 30px rgba(300, 215, 0, 0.2);
    }
    </style>


    <!-- to remember (codes with css in them is called inline) -->

     <div id="home"></div>
 <img src="MILLI IMG/IMG_4649.png" alt="img">
   <div class="circle-overlayH">
    <span>This is</span>
    </div>
  <div class="text-overlayH">
    <span>MILLI</span>
  </div>
 
 <!-- ===== TOP 5 HITS LAYOUT ===== -->
   <div id="Hits"></div>
<div class="hits-container">
  <div class="hits-row">
    
    <!-- LEFT SIDE - Title + Playlist -->
    <div class="hits-left">
      <div class="hits-title">TOP 5 HITS</div>
      <div class="hits-list-wrapper">
        <ul class="hits-list">
          <li>
            <span class="hit-number">1.</span>
            <i class="fa fa-music" onclick="playAudio('ssakAudio')"></i>
            <audio id="ssakAudio" src="audio/ssak.mp3"></audio>
            <span class="song-name">SSAK</span>
          </li>
          <li>
            <span class="hit-number">2.</span>
            <i class="fa fa-music" onclick="playAudio('jbfAudio')"></i>
            <audio id="jbfAudio" src="audio/jbf.mp3"></audio>
            <span class="song-name">Just Being Friendly</span>
          </li>
          <li>
            <span class="hit-number">3.</span>
            <i class="fa fa-music" onclick="playAudio('mirrorAudio')"></i>
            <audio id="mirrorAudio" src="audio/mirror.mp3"></audio>
            <span class="song-name">Mirror Mirror</span>
          </li>
          <li>
            <span class="hit-number">4.</span>
            <i class="fa fa-music" onclick="playAudio('sryAudio')"></i>
            <audio id="sryAudio" src="audio/sry.mp3"></audio>
            <span class="song-name">SORRY</span>
          </li>
          <li>
            <span class="hit-number">5.</span>
            <i class="fa fa-music" onclick="playAudio('aeiouAudio')"></i>
            <audio id="aeiouAudio" src="audio/aeiou.mp3"></audio>
            <span class="song-name">AEIOU</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- RIGHT SIDE - Image - FULL HEIGHT, NO BORDERS, STICKS TO EDGE -->
    <div class="hits-image">
      <img src="MILLI IMG/m.png" alt="hits image">
    </div>
  </div>
</div>
   

   <div class="image-wrapper">
 <img src="MILLI IMG/IMG_4651.png" alt="img3" style="display: block; margin: 0 auto; max-width: 100%; height: auto;">
 <div class="imgtext3" >MILLI (Danupha Khanatheerakul) is a groundbreaking Thai hip-hop artist who made history as the first Thai solo performer at Coachella. Known for her fierce flow, playful charisma, and viral hits like "Phak Kon" and "Sud Pang," she's redefining Thailand's music scene on the global stage.</div>
    </div>
   <div id="events"></div>
<div class="content-wrapper">
  <div class="image-container4">
    <img src="MILLI IMG/IMG_4652.jpeg" alt="img4">
  </div>
   
  <div class="text-content">
   <h1>
      EVENTS
</h1>
    <P>No upcoming events yet. </p>
       <p2>Stay tuned for updates on Milli's tour dates and live performances. Check back soon for the latest information on where you can catch Milli live in action!</p2>
  </div>
</div>

 <!--albums-->
    <div id="albums">
    <div class="image-wrapper">
        <img src="MILLI IMG/IMG_4654.jpeg" alt="img5" style="display: block; width: 100%; height: auto; margin: 0;">
    <div class="img5-text" >ALBUMS</div>
    </div>
   


    <div class="album-row">
           
    <div class="album-item" onclick="playAudio('wcAudio')">
        <img src="MILLI IMG/MILLI_Babb_Bum_Bum_cover_image.webp" alt="Album 1">
        <div class="play-button">
            <i class="fa fa-play-circle"></i>
        </div>
        <p>BABB BUM BUM</p>
        <audio id="wcAudio" src="audio/wc.mp3"></audio>
    </div>
    <div class="album-item" onclick="playAudio('hwAudio')">
        <img src="MILLI IMG/hw.jpg" alt="Album 2">
        <div class="play-button">
        <i class="fa fa-play-circle"></i>
        </div>
            <p>HEAVYWEIGHT</p>
        <audio id="hwAudio" src="audio/hw.mp3"></audio>
    </div>
    <div class="album-item" onclick="playAudio('krmaAudio')">
        <img src="MILLI IMG/krma.jpg" alt="krma">
        <div class="play-button">
        <i class="fa fa-play-circle"></i>
        </div>
            <p>KARMA</p>
        <audio id="krmaAudio" src="audio/krma.mp3"></audio>
    </div>
   <div class="album-item" onclick="playAudio('nbcAudio')">
        <img src="MILLI IMG/prio.jpg" alt="Album 4">
        <div class="play-button">
            <i class="fa fa-play-circle"></i>
        </div>
        <p>DREAMGALS</p>
        <audio id="nbcAudio" src="audio/nbc.mp3"></audio>
    </div>
    
    </div>
    </div>
 

<div class="topnav">
  <a href="#home" class="active">Home</a>
  <a href="#Hits">Hits</a>
  <a href="#Shows">Shows</a>
  <a href="#contact">Contacts</a>
  <a href="#albums">Albums</a>
  <a href="#events">Events</a>
</div>





<!-- ===== SHOWS (anchor(ID)) + MAP ===== -->
<div id="Shows" style="text-align:center; margin: 60px 0 20px;">
  <h2 class="section-title" style="border-bottom-color:#a83131;">UPCOMING SHOWS</h2>
  <p style="color:#bbb; font-size:1.2rem;">📍 Heavy tour 2026 · catch us live</p>
  <!-- map (google maps embed) -->
  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509408!2d144.9537353153167!3d-37.81627937975165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1f5d4d7%3A0x5045675218ce6e0!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sph!4v1650000000000!5m2!1sen!2sph" allowfullscreen loading="lazy"></iframe>
  </div>

   <!-- Ordered List of Shows -->
  <h3 style="color:white; font-family:'Bebas Neue', sans-serif  ; margin-top:30px; font-size: 3em;">Tour Dates</h3>
  <ol style="color:#ddd; font-size:1.2rem; text-align:left; max-width:400px; margin:20px auto; padding-left:40px;">
      <li style="padding:8px 0;">June 22 - Manila, PH</li>
      <li style="padding:8px 0;">July 01 - Tokyo, JP</li>
      <li style="padding:8px 0;">July 15 - Los Angeles, CA</li>
  </ol>

  <!--===================================================== CONTACTS ===================================================== -->
    <section id="contact" class="contact">
    <h2>Get In Touch</h2>
     <p class="contact-subtitle">Feel free to support me through any of the platforms below.</p>

  <!-- contact list -->
  <div class="contact-list">
    <a href="https://www.facebook.com/MILLIOfficial" target="_blank" class="contact-item">
      <i class="fa fa-facebook"></i><span>Facebook</span>
    </a>
    <a href="https://www.instagram.com/phuckitol/" target="_blank" class="contact-item">
      <i class="fa fa-instagram"></i><span>Instagram</span>
    </a>
    <a href="https://open.spotify.com/artist/1eVPKI2R4NlX6P5FIuMXis?si=BufG7MPPSTuxbkSaoVywVg" class="contact-item">
      <i class="fa fa-spotify"></i><span>Spotify</span>
    </a>
    
  </div>

<!--===================================================== PHP FORM ===================================================== -->
<div class="php-form-area">
    <form method="POST" action="shoutout.php">
        <label for="fanName">🎫 Your name:</label>
        <input type="text" id="fanName" name="fan_name" placeholder="Enter name" required>
        <input type="submit" value="Send shoutout">
    </form>
</div>
  <!--===================================================== Video ===================================================== -->
  <div style="margin: 30px auto; max-width:500px;">
    <video controls loop style="width:100%; border-radius:12px; border:2px solid #333;">
      <source src="GIFVID.mp4" type="video/mp4">
      
    </video>
    <p style="color:#666; font-size:0.8rem; margin-top:6px;">🎬 Moments</p>
  </div>
</section>
  <!--===================================================== FOOTER ===================================================== -->
        <footer>
        <p>© 2026 Milli. All rights reserved.</p>
        </footer>

  <!--===================================================== JS ==================================================== -->
<script>
function playAudio(audioId) {
    var audio = document.getElementById(audioId);
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
        audio.currentTime = 0;
    }
}
</script>

</body>
</html>
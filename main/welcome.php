<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Jersey+10&family=Lato&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnrme</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>

<?php include_once '../_inc/header.php' ?>

<img style="width: 100%;" src="fotky/img1.png">

<div class="greet">
    <p class="courgette-regular">Greetings, friend!</p>
    <p style="font-size: 40px;" class="courgette-regular">Some of our courses</p>
</div>

<div class="gallery">
    <div class="gallery-item">
      <a target="_blank" href="fotky/img2.png">
        <img src="fotky/img2.png" alt="cooking">
      </a>
      <p><strong>Cooking Course</strong><br>Length: 4 weeks</p>
    </div>
    <div class="gallery-item">
      <a target="_blank" href="fotky/img3.png">
        <img src="fotky/img3.png" alt="php">
      </a>
      <p><strong>Php Course</strong><br>Length: 5 weeks</p>
    </div>
    <div class="gallery-item">
      <a target="_blank" href="fotky/berlin.jpg">
        <img src="fotky/berlin.jpg" alt="Berlin">
      </a>
      <p><strong>Berlin Culture Course</strong><br>Length: 6 weeks</p>
    </div>
</div>

<div class="aboutus">
    <p>
Welcome to <strong>Learnrme</strong> — your online playground for growth, creativity, and shaping your own future. Here, learning isn’t boring theory or endless slides; it’s practical, inspiring, and built by real people with real experience. Whether you want to master programming, design stunning visuals, boost your marketing skills, or grow personally, we give you the tools, projects, and guidance to learn at your own pace. Join us and transform knowledge into action — because at Learnrme, your future starts today.
    </p>

</div>

<div class="button-way">
    <a href="courses.php" class="button-81">Way to education?</a>
</div>



</body>

<?php include_once '../_inc/footer.php' ?>

</html>
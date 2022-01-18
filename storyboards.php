<?php include 'sidebar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<script src="script.js" defer></script>
</head>
<body>

 <!-- Page content -->
 <div class="main">
  <h1>Storyboards</h1>
  <p>The storyboard projects page.</p>
  <section aria-label="Storyboards">
    <div class="carousel" data-carousel>
      <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
      <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

      <ul data-slides>
        <?php
        //change this to change the image directory
        $path = 'portfolio/be there for me';

          $files = scandir($path);
          $isFirst = true;  //set the first image as the active slide

          foreach ($files as $file) {
          if ($file !== "." && $file !== "..") {

              //the first image is the active slide
              if ($isFirst == true) {
                echo "<li class='slide' data-active>";
                $isFirst = false;
              }
              //subsequent images are not active
              else {
                echo "<li class='slide'>";
              }

              echo "<img src='$path/$file' alt=$file/></li>";
            }
          }
        ?>
      </ul>
    </div>
  </section>
 </div>

</body>
</html>

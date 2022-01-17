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

      <ul data-slides
        <?php
        //change this to change the image directory
        $path = 'portfolio/be there for me';

          $files = scandir($path);
          $isFirst = true;  //set the first image as the active slide

          foreach ($files as $file) {
          if ($file !== "." && $file !== "..") {
              echo "<div class=' col-6 col-sm-4 col-md-3 mt-3 mb-3'>";

              //set the first image as the only active slide
              if ($isFirst == true) {
                echo "<li class='slide' data-active>";
                $isFirst = false;
              }

              //all images after the first are not active
              else {
                echo "<li class='slide'>";
              }
              //replace image src to change image directory
              echo "<img src='$path/$file' alt=$file/></li></div>";
            }
          }
        ?>
      </ul>
    </div>
  </section>
 </div>

</body>
</html>

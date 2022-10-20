<?php include 'sidebar.php'; ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <title>Character Art</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <meta name="description" content="" />

</head>

<body onclick="transformScroll">

    <div class="character-art-container">
    <?php
      //change this to change the image directory
      $path = 'images/character art';
        $files = scandir($path);
        foreach ($files as $file) {
          if ($file !== "." && $file !== "..") {
            echo "<img src='$path/$file' alt=$file/>";
          }
        }

        //this image needs to be hardcoded for resize bc it is much larger than the others
        //echo "<div class='large-turnaround'><img src='portfolio/images/d-turnaround.gif'/></div></div>";
    ?>



</body>

</html>
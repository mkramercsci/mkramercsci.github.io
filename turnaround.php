<?php include 'sidebar.php'; ?>

<script src="salvattore.js" defer></script>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<script src="script.js" defer></script>
</head>

<body>
	
<h1>Turnarounds</h1>

<div class="main">
  <div class="turnaround-container">
    <?php
      //change this to change the image directory
      $path = 'images/turnarounds';
        $files = scandir($path);
        foreach ($files as $file) {
          if ($file !== "." && $file !== "..") {
            echo "<img src='$path/$file' alt=$file/>";
          }
        }

        //this image needs to be hardcoded for resize bc it is much larger than the others
        //echo "<div class='large-turnaround'><img src='portfolio/images/d-turnaround.gif'/></div></div>";
    ?>
</div>

</body>
</html>
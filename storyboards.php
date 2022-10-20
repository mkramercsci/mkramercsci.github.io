<?php include 'sidebar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<script src="script.js" defer></script>
</head>
<body>

<h1>Storyboards</h1>
<!-- Page content -->
  <div class="main">
    <section aria-label="Storyboards">
        <div class='storyboard-container'>

          <iframe width="560" height="315" src="https://www.youtube.com/embed/gjWxvCNL6g8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <div class="carousel" data-carousel>
          <div class="buttons-container">
              <button class="carousel-button prev" data-carousel-button="prev"><</button>
              <button class="carousel-button next" data-carousel-button="next">></button>
          </div>
              <ul data-slides>
                <?php
                //change this to change the image directory
                $path = 'images/storyboards/be there for me';
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

          </div>
        </section>
      
      <div class="storyboard-description-container">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Senectus et netus et malesuada fames. In arcu cursus euismod quis viverra nibh. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent tristique magna sit amet. Nunc congue nisi vitae suscipit tellus mauris a diam maecenas. Massa vitae tortor condimentum lacinia quis vel eros donec. Sit amet justo donec enim diam.</p>

        <p>Auctor elit sed vulputate mi sit amet mauris commodo. Leo integer malesuada nunc vel risus commodo. Cursus sit amet dictum sit amet justo donec. Et netus et malesuada fames. Tincidunt ornare massa eget egestas purus viverra. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis. Duis convallis convallis tellus id interdum velit laoreet. In nibh mauris cursus mattis molestie. Morbi non arcu risus quis varius quam quisque id diam. Vel eros donec ac odio tempor orci dapibus ultrices in. Dictumst quisque sagittis purus sit amet. Semper risus in hendrerit gravida rutrum quisque non tellus orci.</p>

        <p>Adipiscing tristique risus nec feugiat in fermentum posuere urna. Aliquet eget sit amet tellus cras adipiscing. Nunc aliquet bibendum enim facilisis gravida neque convallis. Vulputate eu scelerisque felis imperdiet proin fermentum. Accumsan lacus vel facilisis volutpat est. Felis eget nunc lobortis mattis aliquam faucibus. Ipsum consequat nisl vel pretium lectus. Tempus urna et pharetra pharetra. Proin sed libero enim sed faucibus turpis in eu. Arcu risus quis varius quam quisque id. Laoreet sit amet cursus sit amet. Egestas diam in arcu cursus euismod quis viverra nibh cras. Et malesuada fames ac turpis egestas integer eget aliquet.</p>

        <p>Viverra mauris in aliquam sem fringilla ut morbi tincidunt augue. Nisl pretium fusce id velit ut tortor pretium. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Mi tempus imperdiet nulla malesuada pellentesque elit. Id neque aliquam vestibulum morbi blandit cursus. Dui id ornare arcu odio ut sem. Ornare lectus sit amet est placerat in egestas erat. Elementum eu facilisis sed odio morbi quis. Nunc aliquet bibendum enim facilisis. Nec nam aliquam sem et tortor consequat id porta nibh. Enim ut tellus elementum sagittis vitae et leo duis. Lacus viverra vitae congue eu consequat. Feugiat in ante metus dictum. Massa placerat duis ultricies lacus sed turpis. Quam id leo in vitae turpis massa. Bibendum enim facilisis gravida neque convallis a cras semper. Nisl condimentum id venenatis a. Est ante in nibh mauris cursus.</p>

        <p>Urna condimentum mattis pellentesque id nibh tortor. Iaculis urna id volutpat lacus laoreet non. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Sed sed risus pretium quam. Est ullamcorper eget nulla facilisi. Pulvinar sapien et ligula ullamcorper malesuada proin. Arcu odio ut sem nulla pharetra diam. Egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam. Tempus iaculis urna id volutpat lacus laoreet non. Porttitor leo a diam sollicitudin tempor id eu. Faucibus purus in massa tempor. Quis commodo odio aenean sed adipiscing diam donec adipiscing.</p>
      </div>

  </div>

</body>
</html>

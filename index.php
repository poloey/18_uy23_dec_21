<?php 
  $fruits = ['apple', 'orange', 'mango', 'banana'];
  $title1 = "home page";
  $title2 = 'contact page';
  $page = 'index';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    <?php 
      if ($page == 'index') {
        echo $title1;
      }
     ?>
  </title>
</head>
<body>
  <h1>List of fruit</h1>
  <ul>
    <?php for($i = 0; $i < 4; $i++) : ?>
      <li><?php echo $fruits[$i] ?></li>
    <?php endfor; ?>
  </ul>

</body>
</html>
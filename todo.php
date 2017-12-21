<?php 

$todo1 = new stdClass();
$todo1->text = 'clean the house';
$todo1->complete = false;


$todo2 = new stdClass();
$todo2->text = 'go to market';
$todo2->complete = true;


$todo3 = new stdClass();
$todo3->text = 'make breakfast';
$todo3->complete = false;

$todos = [$todo1, $todo2, $todo3];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    .done {
      text-decoration: line-through;
    }
  </style>
</head>
<body>
  <h1>My todos</h1>
  <ul>
    <?php for($i = 0; $i < 3; $i++) : ?>
    <li class="<?php echo $todos[$i]->complete ? 'done' : '' ?>"><?php echo $todos[$i]->text ?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>
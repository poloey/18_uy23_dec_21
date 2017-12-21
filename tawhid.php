<?php 

class Todo {
  public $text = 'some thing';
  public $complete = false;
}

$todo1 = new Todo;
$todo1->text = 'clean the house';
$todo1->complete = true;

$todo2 = new Todo;
$todo2->text = 'go to market';

$todo3 = new Todo;
$todo3->text = 'making breakfast';

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
  <ul>
    <?php for($i = 0; $i < 3; $i++): ?>
      <?php $done = $todos[$i]->complete ? 'done' : ''; ?>
    <li class="<?php echo $done; ?>"><?php echo $todos[$i]->text; ?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>

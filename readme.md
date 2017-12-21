### 3 ways to write for loop in php

~~~php

<?php for ($i = 0; $i < 4; $i++) { ?>
  <li><?php echo  $fruits[$i] ?></li>
<?php }; ?>
~~~

using concatenation 
~~~html
<?php 

for($i = 0; $i < 4; $i++) {
  echo "<li>" . $fruits[$i] . "</li>";
}

?>
~~~
standard format
~~~html
<?php for($i = 0; $i < 4; $i++) : ?>
  <li><?php echo $fruits[$i] ?></li>
<?php endfor; ?>
~~~

### instantiation a empty class for making a object

~~~php
$todo1 = new stdClass();
$todo1->text = 'clean the house';
$todo1->complete = false;
~~~

here  `text` and `complete` is not available in stdClass. Despite we loaded. this featured call overloading.   

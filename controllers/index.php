<?php
function loadClass(){
  require ('../entities/'.$class.'.php');
}

sql_autoload_register("loadclass");

$Cars = new Cars(234545, 'bleu', 5);
$Bus = new Bus(354553, 'rouge', 35);


include "../views/indexVue.php";
 ?>

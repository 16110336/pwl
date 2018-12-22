
<?php 
class person { var $name; function set_name($new_name) { 
$this->name = $new_name; 
} 
function get_name() { 
return $this->name; 
} 
} 
?>
<?php include("class_lib.php"); ?>
<?php
$stefan = new person();
$jimmy = new person;
$stefan->set_name("Stefan Mischook");
$jimmy->set_name("Nick Waddles");
echo "Stefan's full name: " . $stefan->get_name();
echo "Nick's full name: " . $jimmy->get_name();
?>
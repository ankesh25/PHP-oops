<?php 

class Bicycle {

public static $categories = ['road','mountain','hybrid'];

private static $weight_in_kg = 0;

public static const $gender = ['male','female','unisex'];

public static $properties = ['brand','model','year','categories','color',];

public __constructor($properties){

$brand = $properties['brand'];
$gender = $properties['gender'];



}


public function weight_in_kg()

return $weight_in_kg;


}

public static function set_weight_in_kg($weight_in_kg)
{
	$this->weight_in_kg = $weight_in_kg;

}


public function weight_in_pound()

return $this->weight_in_pound;


}

public static function set_weight_in_kg($weight_in_kg)
{
	$this->weight_in_kg = $weight_in_kg;

}




 ?>
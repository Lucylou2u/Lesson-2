
<?php
// A class to hold a person's data
class Person{

public $name;
public $age;
public $gender;
public $postcode;
public $move;
public $id;

public function __construct($id){
    $this->id = $id;
    $this->name = 'Lou';

}

}
    // $name = "Mike";
    // $age = 33;
    // $gender = "Male";
    // $postcode = "TF32NS";
    // $move = "Mind Trick";  

    // if($age > 60){
    //     $description = "Master";
    // }elseif($age > 20){
    //     $description = "Padwan";
    // }else{
    //     $description = "Youngling";
    // }

?>
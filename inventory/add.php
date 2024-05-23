<?php
include '../includes/data.php';

$file = '../data/inventory.txt';
$inventorydata = readData($file);

class inventory{
    private $id;
    private $drug_name;
    private $quantity;

    public function setId($id){
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setdrug_name($drug_name){
        $this->drug_name = $drug_name;
    }

    public function getdrug_name(){
        return $this->drug_name;
    }

    public function setquantity($quantity){
        $this->quantity=$quantity;
    }

    public function getquantity(){
        return $this->quantity;
    }
    

}

$inventory->setId($_POST['id']);
$inventory->setdrug_name($_POST['drug_name']);
$inventory->setquantity($_POST['quantity']);


$inventorydata[] = new inventory();

writeData($file, $inventorydata);

header("Location: index3.php");
?>

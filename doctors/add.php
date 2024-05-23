<?php
include '../includes/data.php';

$file = '../data/doctors.txt';
$doctors = readData($file);

class doctor{
    private $id;
    private $name;
    private $specialty;
    private $schedule;
    private $time;

    public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setname($name) {
        $this->name = $name;
    }

    public function getname() {
        return $this->name;
    }

    public function setspecialty($specialty) {
        $this->specialty = $specialty;
    }

    public function getspecialty() {
        return $this->specialty;
    }

    public function setschedule($schedule){
        $this->schedule = $schedule;   
    }

    public function getschedule(){
        return $this->schedule;
    }

    public function settime($time){
        $this->time = $time;
    }

    public function gettime(){
        return $this-> time;
    }
}

$inventory->setId($_POST['id']);
$inventory->setname($_POST['name']);
$inventory->setspecialty($_POST['specialty']);
$inventory->setschedule($_POST['schedule']);
$inventory->settime($_POST['time']);
    

$doctors[] = new doctor ();

writeData($file, $doctors);

header("Location: index2.php");
?>

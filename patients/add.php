<?php
include '../includes/data.php';

$file = '../data/patients.txt';
$patients = readData($file);


class Patient {
    private $id;
    private $name;
    private $age;
    private $address;
    private $phoneNumber;
    private $date;
    private $gender;
    private $familyHistory;
    private $pastConditions;
    private $surgicalHistory;
    private $visitDateTime;
    private $chiefComplaint;
    private $diagnosis;
    private $treatmentPlan;
    private $physicalExamResults;
    private $prescribedMedications;
    private $medicationDosage;
    private $specialInstructions;
    private $medicalProcedures;

    // Setter and getter methods

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getDate() {
        return $this->date;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setFamilyHistory($familyHistory) {
        $this->familyHistory = $familyHistory;
    }

    public function getFamilyHistory() {
        return $this->familyHistory;
    }

    public function setPastConditions($pastConditions) {
        $this->pastConditions = $pastConditions;
    }

    public function getPastConditions() {
        return $this->pastConditions;
    }

    public function setSurgicalHistory($surgicalHistory) {
        $this->surgicalHistory = $surgicalHistory;
    }

    public function getSurgicalHistory() {
        return $this->surgicalHistory;
    }

    public function setVisitDateTime($visitDateTime) {
        $this->visitDateTime = $visitDateTime;
    }

    public function getVisitDateTime() {
        return $this->visitDateTime;
    }

    public function setChiefComplaint($chiefComplaint) {
        $this->chiefComplaint = $chiefComplaint;
    }

    public function getChiefComplaint() {
        return $this->chiefComplaint;
    }

    public function setDiagnosis($diagnosis) {
        $this->diagnosis = $diagnosis;
    }

    public function getDiagnosis() {
        return $this->diagnosis;
    }

    public function setTreatmentPlan($treatmentPlan) {
        $this->treatmentPlan = $treatmentPlan;
    }

    public function getTreatmentPlan() {
        return $this->treatmentPlan;
    }

    public function setPhysicalExamResults($physicalExamResults) {
        $this->physicalExamResults = $physicalExamResults;
    }

    public function getPhysicalExamResults() {
        return $this->physicalExamResults;
    }

    public function setPrescribedMedications($prescribedMedications) {
        $this->prescribedMedications = $prescribedMedications;
    }

    public function getPrescribedMedications() {
        return $this->prescribedMedications;
    }

    public function setMedicationDosage($medicationDosage) {
        $this->medicationDosage = $medicationDosage;
    }

    public function getMedicationDosage() {
        return $this->medicationDosage;
    }

    public function setSpecialInstructions($specialInstructions) {
        $this->specialInstructions = $specialInstructions;
    }

    public function getSpecialInstructions() {
        return $this->specialInstructions;
    }

    public function setMedicalProcedures($medicalProcedures) {
        $this->medicalProcedures = $medicalProcedures;
    }

    public function getMedicalProcedures() {
        return $this->medicalProcedures;
    }
}

    $patient->setId($_POST['id']);
    $patient->setName($_POST['name']);
    $patient->setAge($_POST['age']);
    $patient->setAddress($_POST['address']);
    $patient->setPhoneNumber($_POST['phoneNumber']);
    $patient->setDate($_POST['date']);
    $patient->setGender($_POST['gender']);
    $patient->setFamilyHistory($_POST['familyHistory']);
    $patient->setPastConditions($_POST['pastConditions']);
    $patient->setSurgicalHistory($_POST['surgicalHistory']);
    $patient->setVisitDateTime($_POST['visitDateTime']);
    $patient->setChiefComplaint($_POST['chiefComplaint']);
    $patient->setDiagnosis($_POST['diagnosis']);
    $patient->setTreatmentPlan($_POST['treatmentPlan']);
    $patient->setPhysicalExamResults($_POST['physicalExamResults']);
    $patient->setPrescribedMedications($_POST['prescribedMedications']);
    $patient->setMedicationDosage($_POST['medicationDosage']);
    $patient->setSpecialInstructions($_POST['specialInstructions']);
    $patient->setMedicalProcedures($_POST['medicalProcedures']);


$patients[] = new Patient();

writeData($file, $patients);

header("Location: index1.php");
?>
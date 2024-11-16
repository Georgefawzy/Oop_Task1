<?php


// Question 1

// class Circle {
//     // Private instance variables
//     private $radius = 1.0;
//     private $color = "red";

//     // Default constructor
//     public function __construct($radius = 1.0, $color = "red") {
//         $this->radius = $radius;
//         $this->color = $color;
//     }

//     // Getter and Setter for radius
//     public function getRadius() {
//         return $this->radius;
//     }
//     public function setRadius($radius) {
//         $this->radius = $radius;
//     }

//     // Getter and Setter for color
//     public function getColor() {
//         return $this->color;
//     }
//     public function setColor($color) {
//         $this->color = $color;
//     }

//     // Method to calculate the area
//     public function getArea() {
//         return pi() * pow($this->radius, 2);
//     }

//     // Method to represent the object as a string
//     public function toString() {
//         return "Circle[radius=" . $this->radius . ", color=" . $this->color . "]";
//     }
// }

// $circle1 = new Circle(); // Default circle
// echo $circle1->toString() . "<br/>";
// echo "Area: " . $circle1->getArea() . "<br/><br/>";

// $circle2 = new Circle(5, "blue"); // Custom circle
// echo $circle2->toString() . "<br/>";
// echo "Area: " . $circle2->getArea() . "<br/>";


//================================================================================================
// Question 2
// class Employee {
//     private $id;
//     private $firstName;
//     private $lastName;
//     private $salary;
//     public function __construct($id, $firstName, $lastName, $salary){
//         $this->id = $id;
//         $this->firstName = $firstName;
//         $this->lastName = $lastName;
//         $this->salary = $salary;
//     }
//     public function getID(){
//         return $this->id;
//     }
//     public function getFirstName(){
//         return $this->firstName;
//     }
//     public function getLastName(){
//         return $this->lastName;
//     }
//     public function getName() {
//         return $this->firstName . " " . $this->lastName;
//     }
//     public function getSalary():int{
//         return $this->salary;
//     }
//     public function getAnnualSalary(){
//         return $this->salary*12;
//     }
//     public function raiseSalary($percent){
//         $this->salary += $this->salary * ($percent / 100);
//         return $this->salary;    }
//     public function setFirstName($firstName){
//         $this->firstName = $firstName;
//     }
//     public function setLastName($lastName){
//         $this->lastName = $lastName;
//     }
//     public function setSalary($salary){
//         $this->salary = $salary;
//     }
//     public function getEmployeeInfo(){
//         return "ID: ".$this->id.", First Name: ".$this->firstName.", Last Name: ".$this->lastName.", Salary: ".$this->salary ;

// }
// public function __toString() {
//     return "Employee[id={$this->id},name={$this->getName()},salary={$this->salary}]";
// }
// }
// $employee = new Employee(1, "George", "Fawzy", 1000);

// echo "<pre>";
// echo "Full Name :". $employee->getName(). "</pre>";
// echo $employee->getEmployeeInfo()." <br/>";
// echo "Annual Salary: ".$employee->getAnnualSalary() ." <br/>";
// $employee->raiseSalary(15)." <br/>";
// echo "New Salary: ".$employee->getSalary()." <br/>";
// echo $employee;
//  echo "<br/>";
// echo "</pre>";



//================================================================================================

// Question 3

 class rectangle{
     private $length;
     private $width;

     public function __construct($length, $width){
         $this->length = $length;
         $this->width = $width;
     }
     public function getArea(){
         return $this->length * $this->width;
     }
     public function getPerimeter(){
         return 2 * ($this->length + $this->width);
     }
     public function getLength(){
         return $this->length;
     }
     public function getWidth(){
         return $this->width;
     }
     public function setLength($length){
         $this->length = $length;
     }
     public function setWidth($width){
         $this->width = $width;
     }
     public function getDiagonal(){
         return sqrt(pow($this->length, 2) + pow($this->width, 2));
     }
     public function getRectangleInfo(){
         return "Length: ".$this->length.", Width: ".$this->width.", Area: ".$this->getArea().", Perimeter: ".$this->getPerimeter().", Diagonal: ".$this->getDiagonal();
     }
     public function __toString() {
         return "Rectangle[length={$this->length}, width={$this->width}]";
     }
 }
 $rectangle = new Rectangle(4, 6);
 echo "<pre>";
 echo $rectangle->getRectangleInfo()." <br/>";
 echo $rectangle;
 echo "</pre>";
 echo "<br/>";
//================================================================================================

// Question 4

// class invoiceItems{
//     private string $id ;
//     private string $description ;
//     private int $qty; 
//     private $unitPrice; 
//     public function __construct($id, $description, $qty, $unitPrice){
//         $this->id = $id;
//         $this->description = $description;
//         $this->qty = $qty;
//         $this->unitPrice = $unitPrice;
//     }
//     public function getId(){
//         return $this->id;
//     }
//     public function getDescription(){
//         return $this->description;
//     }
//     public function getQTY(){
//         return $this->qty;
//     }
//     public function getUnitPrice(){
//         return $this->unitPrice;
//     }
//     public function setDescription($description){
//         $this->description = $description;
//     }
//     public function setQTY($qty){
//         $this->qty = $qty;
//     }
//     public function setUnitPrice($unitPrice){
//         $this->unitPrice = $unitPrice;
//     }
//     public function getSubTotal(){
//         return $this->qty * $this->unitPrice;
//     }
//     public function __toString() {
//         return "InvoiceItem[id={$this->id}, description={$this->description}, qty={$this->qty}, unitPrice={$this->unitPrice}]";
//     }


// }

// $item1 = new InvoiceItems("1", "Laptop", 5, 1000);

// echo "<pre>";

// echo $item1->getDescription(). " : $". $item1->getSubTotal(). " <pre/>";

// echo $item1;

// $item2 = new InvoiceItems("2", "Mouse", 10, 50);

// echo $item2->getDescription(). " : $". $item2->getSubTotal(). " <pre/>";

// echo $item2;

// echo "</pre>";


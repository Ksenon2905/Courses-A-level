<?php

abstract class CoursesAlevel {

    public $Courses;
    public $lenght;
    public $Days;
    public $MaxStudents;
    public $Price;
    public $Teachers;
    public $Students;

    abstract function Courses($Courses);

    abstract function length($length);

    abstract function Days($Days);

    abstract function MaxStudents($MaxStudents);

    abstract function Price($Price);

    abstract function Teachers($Teachers);

    abstract function Students($Students);

    abstract function output();

}


class FrontAdv extends CoursesAlevel{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$FrontAdv = new FrontAdv();

$FrontAdv->Courses("Front-End Advanced");
$FrontAdv->length("Six Months");
$FrontAdv->Days("Tuesday,Friday");
$FrontAdv->MaxStudents("15");
$FrontAdv->Price("4000 in month");
$FrontAdv->Teachers("Natalia Shiryaeva, Daniil Marynich, Maxim Khudoley, Ivan Grinkin");
$FrontAdv->Students();
$FrontAdv->output();

class Sales extends FrontAdv{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$Sales = new Sales();

$Sales->Courses("Sales in iT Advanced");
$Sales->length("Four Mouths");
$Sales->Days("Monday, Thursday, Friday");
$Sales->MaxStudents("15");
$Sales->Price("4000 in month");
$Sales->Teachers("Taras Fedoruk, Daniil Marynich, Alexander Konovalenko, Alexey Petrenko");
$Sales->Students();
$Sales->output();

class PHPadv extends Sales{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
       echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";

    }
}

$PHPadv = new PHPadv();

$PHPadv->Courses("PHP Advanced");
$PHPadv->length("Fifth Mounts");
$PHPadv->Days("Monday, Thursday");
$PHPadv->MaxStudents("15");
$PHPadv->Price("4000 in month");
$PHPadv->Teachers("Alexander Shereminsky, Daniil Marynich, Ivan Grinkin");
$PHPadv->Students();
$PHPadv->output();

class Project extends PHPadv{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$Project = new Project();

$Project->Courses("Project Management");
$Project->length("Three Mounts");
$Project->Days("Wednesday, Saturday");
$Project->MaxStudents("15");
$Project->Price("6000 for the course");
$Project->Teachers("Taras Fedoruk, Alexander Tuchkov");
$Project->Students();
$Project->output();

class JavaExt extends Project{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
       echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$JavaExt = new JavaExt();

$JavaExt->Courses("Java Extended");
$JavaExt->length("Six Mounts");
$JavaExt->Days("Tuesday, Friday");
$JavaExt->MaxStudents("15");
$JavaExt->Price("2700 in month");
$JavaExt->Teachers("");
$JavaExt->Students();
$JavaExt->output();

class Web extends JavaExt{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$Web = new Web();

$Web->Courses("Web Design");
$Web->length("Three Mounts");
$Web->Days("Tuesday, Friday");
$Web->MaxStudents("");
$Web->Price("6200 for the course");
$Web->Teachers("Egor Sohan, Maxim Grekov, Elena Furmanova,
Maxim Lebedev, Alexey Petrenko");
$Web->Students();
$Web->output();

class Software extends Web{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$Software = new Software();

$Software->Courses("Software Testing");
$Software->length("Three Mounts");
$Software->Days("Tuesday, Friday");
$Software->MaxStudents("15");
$Software->Price("6000 for the course");
$Software->Teachers("Bogdan Sukhov, Anna Shirova");
$Software->Students();
$Software->output();

class BasicsProg extends Software{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers) {
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$BasicsProg = new BasicsProg();

$BasicsProg->Courses("Basics of Programming");
$BasicsProg->length("One and a half Mounts");
$BasicsProg->Days("Wednesday, Saturday");
$BasicsProg->MaxStudents("15");
$BasicsProg->Price("3200 for the course");
$BasicsProg->Teachers("Daniil Marynich, Ivan Grinkin");
$BasicsProg->Students();
$BasicsProg->output();

class Front extends BasicsProg{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}


$Front = new Front();

$Front->Courses("Front-End");
$Front->length("Three Mounts");
$Front->Days("Tuesday, Friday");
$Front->MaxStudents("");
$Front->Price("6400 for the course");
$Front->Teachers("Natalia Shiryaeva, Ivan Grinkin");
$Front->Students();
$Front->output();

class NET extends Front{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;; 
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$NET = new NET();

$NET->Courses(".NET/C#");
$NET->length("Three Mounts");
$NET->Days("Tuesday, Friday");
$NET->MaxStudents("15");
$NET->Price("6000 for the course");
$NET->Teachers("Maxim Khudoley");
$NET->Students();
$NET->output();

class ITEng extends NET{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$ITEng = new ITEng();

$ITEng->Courses("IT English");
$ITEng->length("Three Mounts");
$ITEng->Days("Monday, Thursday");
$ITEng->MaxStudents("12");
$ITEng->Price("2700 for the course");
$ITEng->Teachers("Olga Sidorenko");
$ITEng->Students();
$ITEng->output();

class Js extends ITEng{
    public function Courses($Courses) {
        $this->Courses = $Courses;
    }
    public function length($length) {
        $this->length = $length;
    }
    public function Days($Days) {
        $this->Days = $Days;;
    }
    public function MaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function Price($Price) {
        $this->Price = $Price;
    }
    public function Teachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function Students($Students){
        $this->Students = $Students;
    }
    public function output(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" . "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" . "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "Students: " . $this->Students . "\n" . "\n";
    }
}

$Js = new Js();

$Js->Courses("React.Js");
$Js->length("Three Mounts");
$Js->Days("Wednesday, Saturday");
$Js->MaxStudents("15");
$Js->Price("6000 for the course");
$Js->Teachers("Maxim Khudoley");
$Js->Students();
$Js->output();
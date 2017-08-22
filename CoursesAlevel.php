<?php
abstract class Courses {
    public $Courses;
    public $lenght;
    public $Days;
    public $MaxStudents;
    public $Price;
    public $Teachers;
    public $Students;

    abstract function setCourses($Courses);
    abstract function setLength($Length);
    abstract function setDays($Days);
    abstract function setMaxStudents($MaxStudents);
    abstract function setPrice($Price);
    abstract function setTeachers($Teachers);
}

class CoursesAlevel extends Courses {

    public function setCourses($Courses) {
        $this->Courses = $Courses;
    }
    public function setLength($length) {
        $this->length = $length;
    }
    public function setDays($Days) {
        $this->Days = $Days;;
    }
    public function setMaxStudents($MaxStudents) {
        if(! is_numeric($MaxStudents)) {
            $this->MaxStudents = "Set is closed";
            return false;
        }
        $this->MaxStudents = $MaxStudents;
    }
    public function setPrice($Price) {
        $this->Price = $Price;
    }
    public function setTeachers($Teachers){
        $this->Teachers = $Teachers;
    }
    public function setName($Name){
        $this->Name = $Name;
    }
    public function setSurname($Surname){
        $this->Surname = $Surname;
    }
    public function setMail($Mail){
        $this->Mail = $Mail;
    }
    public function setPhone($Phone){
        if(! numeric($Phone)){
            $this->Phone = "Unknown value";
            return false;
        }
    }
    public function __toString(){
        echo "Course " . $this->Courses . ",\n" . "Length: " . $this->length . ",\n" .
         "By days: " . $this->Days . ",\n" . "Of MaxStudents: " . $this->MaxStudents . ",\n" .
         "Of price: " . $this->Price . ",\n" . "Teachers: " . $this->Teachers . ",\n" . "\n" .
          "Students courses: " . "\n" . "\n";
    }

}

class FrontAdv extends CoursesAlevel{

}
$FrontAdv = new FrontAdv();
$FrontAdv->setCourses("Front-End Advanced");
$FrontAdv->setLength("Six Months");
$FrontAdv->setDays("Tuesday,Friday");
$FrontAdv->setMaxStudents("15");
$FrontAdv->setPrice("4000 in month");
$FrontAdv->setTeachers("Natalia Shiryaeva, Daniil Marynich, Maxim Khudoley, Ivan Grinkin");
$FrontAdv->__toString();

class Sales extends CoursesAlevel {

}

$Sales = new Sales();
$Sales->setCourses("Sales in iT Advanced");
$Sales->setLength("Four Mouths");
$Sales->setDays("Monday, Thursday, Friday");
$Sales->setMaxStudents("15");
$Sales->setPrice("4000 in month");
$Sales->setTeachers("Taras Fedoruk, Daniil Marynich, Alexander Konovalenko, Alexey Petrenko");
$Sales->__toString();

class PHPadv extends CoursesAlevel {

}

$PHPadv = new PHPadv();
$PHPadv->setCourses("PHP Advanced");
$PHPadv->setLength("Fifth Mounts");
$PHPadv->setDays("Monday, Thursday");
$PHPadv->setMaxStudents("15");
$PHPadv->setPrice("4000 in month");
$PHPadv->setTeachers("Alexander Shereminsky, Daniil Marynich, Ivan Grinkin");
$PHPadv->__toString();

class Project extends CoursesAlevel {

}

$Project = new Project();
$Project->setCourses("Project Management");
$Project->setLength("Three Mounts");
$Project->setDays("Wednesday, Saturday");
$Project->setMaxStudents("15");
$Project->setPrice("6000 for the course");
$Project->setTeachers("Taras Fedoruk, Alexander Tuchkov");
$Project->__toString();

class JavaExt extends CoursesAlevel {

}

$JavaExt = new JavaExt();
$JavaExt->setCourses("Java Extended");
$JavaExt->setLength("Six Mounts");
$JavaExt->setDays("Tuesday, Friday");
$JavaExt->setMaxStudents("15");
$JavaExt->setPrice("2700 in month");
$JavaExt->setTeachers("");
$JavaExt->__toString();

class Web extends CoursesAlevel {

}
$Web = new Web();
$Web->setCourses("Web Design");
$Web->setLength("Three Mounts");
$Web->setDays("Tuesday, Friday");
$Web->setMaxStudents("");
$Web->setPrice("6200 for the course");
$Web->setTeachers("Egor Sohan, Maxim Grekov, Elena Furmanova,
Maxim Lebedev, Alexey Petrenko");
$Web->__toString();

class Software extends CoursesAlevel {

}
$Software = new Software();
$Software->setCourses("Software Testing");
$Software->setLength("Three Mounts");
$Software->setDays("Tuesday, Friday");
$Software->setMaxStudents("15");
$Software->setPrice("6000 for the course");
$Software->setTeachers("Bogdan Sukhov, Anna Shirova");
$Software->__toString();

class BasicsProg extends CoursesAlevel {

}
$BasicsProg = new BasicsProg();
$BasicsProg->setCourses("Basics of Programming");
$BasicsProg->setLength("One and a half Mounts");
$BasicsProg->setDays("Wednesday, Saturday");
$BasicsProg->setMaxStudents("15");
$BasicsProg->setPrice("3200 for the course");
$BasicsProg->setTeachers("Daniil Marynich, Ivan Grinkin");
$BasicsProg->__toString();

class Front extends CoursesAlevel {

}
$Front = new Front();
$Front->setCourses("Front-End");
$Front->setLength("Three Mounts");
$Front->setDays("Tuesday, Friday");
$Front->setMaxStudents("");
$Front->setPrice("6400 for the course");
$Front->setTeachers("Natalia Shiryaeva, Ivan Grinkin");
$Front->__toString();

class NET extends CoursesAlevel {
}

$NET = new NET();
$NET->setCourses(".NET/C#");
$NET->setLength("Three Mounts");
$NET->setDays("Tuesday, Friday");
$NET->setMaxStudents("15");
$NET->setPrice("6000 for the course");
$NET->setTeachers("Maxim Khudoley");
$NET->__toString();

class ITEng extends CoursesAlevel {

}
$ITEng = new ITEng();
$ITEng->setCourses("IT English");
$ITEng->setLength("Three Mounts");
$ITEng->setDays("Monday, Thursday");
$ITEng->setMaxStudents("12");
$ITEng->setPrice("2700 for the course");
$ITEng->setTeachers("Olga Sidorenko");
$ITEng->__toString();

class Js extends CoursesAlevel {

}
$Js = new Js();
$Js->setCourses("React.Js");
$Js->setLength("Three Mounts");
$Js->setDays("Wednesday, Saturday");
$Js->setMaxStudents("15");
$Js->setPrice("6000 for the course");
$Js->setTeachers("Maxim Khudoley");
$Js->__toString();
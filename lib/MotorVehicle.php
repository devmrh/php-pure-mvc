<?php
interface fly{
    public function fly();
}
interface  shoot{
    public function shoot();
}

abstract class Mammal{

    protected $age;

    abstract public function setAge($age);
    abstract public function getAge();
    abstract public function eat($food);
}

class person1 extends Mammal{
    protected $job;

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    protected function getJob(){
        return $this->job;
    }

    public function eat($food)
    {
        echo "im easting".$food;
    }
}

class person2 extends Mammal implements fly,shoot {


 protected $job;


    public function setAge($age)
    {
        $this->age = $age;

    }


    public function set_job($job){
        return $this->job =  $job;

    }

    public function getAge()
    {
        return $this->age;
    }

    public function eat($food)
    {
        echo "person 2 eating ".$food;
    }

    public function fly()
    {
        echo "this person can fly by plane";

    }
    public function shoot()
    {
        echo "this person can shoot by gun";
    }
}



$a = dir(getcwd());
$date = date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("10"));
echo date_format($date,"Y-m-d");

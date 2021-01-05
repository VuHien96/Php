<?php

class Animal
{
    private $name;
    private $color;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

class Dog extends Animal
{
    private $legs;

    public function getLegs()
    {
        return $this->legs;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function display()
    {
        echo "Legs: " . $this->getLegs() . "<br>";
        parent::display();
    }
}

$dog = new Dog();
$dog->setName("dog");
$dog->setColor("black");
$dog->setLegs("4");
echo $dog->display();
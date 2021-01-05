<?php

class Book
{
    public $id;
    private $name;
    protected $description;

    /**
     * Book constructor.
     */
    public function __construct()
    {

    }



    /**
     * Book constructor.
     * @param $id
     * @param $name
     * @param $description
     */
//    public function __construct($id, $name, $description)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->description = $description;
//    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    function display()
    {
        echo 'Id: ' . $this->getId() . "<br>";
        echo 'Name: ' . $this->getName() . "<br>";
        echo 'Description: ' . $this->getDescription() . "<br>";
    }

}

$book = new Book();
$book->setId(2);
$book->setName("sach");
$book->setDescription("mieu ta");
$book->display();

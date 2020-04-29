<?php
class CSV{
    private $name;
    private $src;
    private $numberOfColumns;
    private $columnArray;

    public function __construct($name, $src, $numberOfColumns, $columnArray){
        $this->setName($name);
        $this->setSrc($src);
        $this->setNumberOfColumns($numberOfColumns);
        $this->setColumnArray($columnArray);

        return true;
    }
    // __construct END

    //getters and setters
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return true;
    }

    public function getSrc(){
        return $this->src;
    }

    public function setSrc($src){
        $this->src = $src;
        return true;
    }

    public function getNumberOfColumns(){
        return $this->numberOfColumns;
    }

    public function setNumberOfColumns($numberOfColumns){
        $this->numberOfColumns = $numberOfColumns;
        return true;
    }

    public function getColumnArray(){
        return $this->columnArray;
    }

    public function setColumnArray($columnArray){
        $this->columnArray = $columnArray;
    }
    //getters and setters END

}
?>
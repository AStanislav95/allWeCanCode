<?php
class Taaask { 

    protected $description;
    protected $completed = false;

    public function __construct($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }
}

$task = new Taaask('Buy some wine');

echo $task->getDescription();

?>
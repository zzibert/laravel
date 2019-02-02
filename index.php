<?php

require 'functions.php';

class Task {

    public $description;

    public $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function isComplete(){
        return $this->completed;
    }

    public function complete(){
        return $this->completed = true;
    }
}

$tasks = [
    new Task('go to the store'),
    new Task('beat up grandma'),
    new Task('mjavk the mjavk'),
];

$tasks[0]->complete();

 require './index.view.php';
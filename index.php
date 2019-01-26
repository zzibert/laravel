<?php

require 'functions.php';

class Task {
    public $description;

    protected $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function complete(){
        $this->completed = true;
    }
}

$tasks = [
    new Task('go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

require 'index.view.php';




<?php

require 'functions.php';

require 'Task.php';

$pdo = connnectToDB();

$tasks = fetchAllTasks($pdo);

require './index.view.php';
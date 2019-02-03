<?php 

$config = 'config.php';

class Connection {
    public static function make($config) {
        try {
            return $pdo = new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOExpection $e) {
            die('could not connect!');
        }
    }
}

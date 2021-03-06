<?php

class ConnectionManager {
    public function getConnection() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "weightwatcher";
        $port = 3306;

        $url = "mysql:host={$host};dbname={$dbname}";

        $conn = new PDO($url, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    }
}

?>
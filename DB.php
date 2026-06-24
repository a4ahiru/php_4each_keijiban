<?php

    class DB{
        public function connect(){
            $pdo = new PDO("mysql:host=localhost;dbname=lesson01;charset=utf8mb4","root","");
            return $pdo;
        }

        public function insert(){
            return "insert into 4each_keijiban(handlename,title,comments)values(?,?,?)";
        }

        public function select(){
            return "select * from 4each_keijiban";
        }
    }

?>
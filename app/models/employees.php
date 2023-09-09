<?php
require(LIBS."DB/MysqliDb.php");
class employees extends model{
    private $table="employees";
    private $conn;

    public function __construct(){
        $this->conn=$this->connect();
    }

    //get all user

    public function getAllUser(){
        return $this->conn->get($this->table);
    }

    //get one user 
    public function getUser($id){
        $db=$this->conn->where ("id", $id);
        return $db->getOne ($this->table);
    }

    //insert user
    public function insertUser($data){
        return $this->conn->insert ($this->table, $data);
    }

    //delete user
    public function deleteUser($id){
        $db=$this->conn->where ("id", $id);
        return $db->delete($this->table);
    }

    //update user
    public function updateUser($id,$data){
        $db=$this->conn->where ("id", $id);
        return $db->update($this->table, $data);
    }
}
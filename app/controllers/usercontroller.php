<?php

class usercontroller{
        //select user
    public function index(){
        $employee=new employees();
        $data["title"]="employees page";
        $data['emp']=$employee->getAllUser();
        // var_dump($data['emp']);
        view::load("user/index",$data);
    }
    
    //add
    public function add(){
        
        view::load("user/add");
     }
    
    //insert user
    public function insert(){
            
         if(isset($_POST['submit'])){
        
            $name=$_POST['name'];
            $email=$_POST['email'];
    
            $data = Array (
                "name" => $name,
                "email" => $email
            );
            $emp=new employees();
             if($emp->insertUser($data)){
             $data["success"]="data added";
                view::load('user/add',$data);
                
            }else{
                $data["error"]="data not added";
                view::load('user/add',$data);
            
            }
        }
    }
    
    //delete user
    public function delete($id){
        $emp=new employees();
        if($emp->deleteUser($id)){
            $data["success"]="data deleted";
            view::load('user/delete',$data);
        }else{
            $data["error"]="data not deleted";
            view::load('user/delete',$data);
        }
    }

    //edit user

    public function edit($id){
        $emp=new employees();
        if($emp->getUser($id)){
            $data['row']=$emp->getUser($id);
            view::load("user/edit",$data);
        }else{
            echo "error";
        }
    }

    public function update($id){
        if(isset($_POST['submit'])){
        
            $name=$_POST['name'];
            $email=$_POST['email'];
    
            $data = Array (
                "name" => $name,
                "email" => $email
            );
            $emp=new employees();
             if($emp->updateUser($id,$data)){
                $data["success"]="data updated";
                $data['row']=$emp->getUser($id);
                view::load('user/edit',$data);
                
            }else{
                $data["error"]="data not updated";
                
                view::load('user/edit',$data);
            
            }
        }

    }
}

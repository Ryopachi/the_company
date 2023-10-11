<?php
include "Connection.php";
;
// inheritance - 


class User extends Connection {

    public function signUp($request){
        $firstname = $request['first_name'];  #$_POST[''first_name']
        $lastname = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES('$firstname','$lastname','$username','$hashed_password') ";

        if($this->conn->query($sql)) {
            header("location: ../views/sign-in.php");
            exit;
        }else {
            die("ERROR: ".$this->conn->error);
        }
        // dashboard.php
        // create signIn Metod
        // create UI 
        // create Action
        // make sure it works
         
        }
        public function signIn($username,$password){
            $sql = "SELECT * FROM users WHERE username = '$username'";
    
            if($result = $this->conn->query($sql)){
                // make sure that there is no duplicate username
                if($result->num_rows == 1){
                    $user = $result->fetch_assoc();
                    if(password_verify($password,$user['password'])){
                        session_start();
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['full_name'] = $user['first_name']." ".$user['last_name'];
                        $_SESSION['username'] = $user['username'];
    
                        header('location: ../views/dashboard.php');
                        exit;
                    }else{
                        die("ERROR: password dont match".$this->conn->error);
                    }
                }else{
                    die("ERROR: Username not found ".$this->conn->error);
                }
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }


    //     public function all_users($request){
    //         $request['id'];
    //         $request['first_name'];  #$_POST[''first_name']
    //         $request['last_name'];
    //         $request['username'];
           
      
    //     $sql = "SELECT  `first_name`, `last_name`, `username`, FROM `users` ";
        
    //     while($result=$this->all_users($request)->fetch_assoc()) {
            
    //     if($result=$this->conn->query($sql)) {
    //     echo   "<tr>";
    //      echo    "<td>". $result['first_name'] ."</td>";
    //      echo    "<td>". $result['last_name'] ."</td>";
    //      echo    "<td>". $result['username'] ."</td>";
    //      echo       "<td>";
    //      echo          "<a href='edit-post.php?id='".$result['id'] ." class='btn btn-outline-secondary btn-sm'>
    //                 <i class='fa-solid fa-pencil'></i></a>";

    //      echo          "<a href='delete-post.php?id=". $result['id'] ." class='btn btn-outline-danger btn-sm'>
    //                 <i class='fa-solid fa-trash'></i></a>";
    //      echo       "</td>";
    //      echo   "</tr>";
    //     }else {
    //         die("ERROR: ".$this->conn->error);
    //     }
           
    //     }

    // }
    public function all_users(){
        $sql = "SELECT * FROM users";
 
         if($result = $this->conn->query($sql)){
             return $result;
         }else{
             die("ERROR: ".$this->conn->error);
         }
     }

     public function show_user($id){
       

        $sql = "SELECT * FROM users WHERE `id`= $id ";
 
         if($result = $this->conn->query($sql)){
             return $result->fetch_assoc();
         }else{
             die("ERROR: ".$this->conn->error);
         }
     }

     public function edit_user($request) {
        $id =       $_GET['id'];
        $first_name = $request['first_name'];  #$_POST[''first_name']
        $last_name = $request['last_name'];
        $username = $request['username'];
       

        $sql  = "UPDATE `users` SET `first_name` ='$first_name', `last_name`='$last_name', `username`='$username' WHERE `id`= '$id'";
        // $sql  = "UPDATE products SET `name` = '$name', `description` = '$description', `price` = '$price', `section_id` = '$section_id' WHERE id = $id";
        if($this->conn->query($sql)){
            
            header("location: ../views/dashboard.php");
            exit;
        }else {
            die("Error editing the category". $this->conn->error);
        }

     }

     public function updatePhoto($id, $photo_name) {
        $id = $_SESSION['id'];
        $photo_name = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];

        $sql = "UPDATE users SET photo = '$photo_name' WHERE id = $id";

        if($this->conn->query($sql)) {
            $destination = "assets/images/$photo_name";
            move_uploaded_file($photo_tmp, $destination);
            header("refresh: 0");
        }else {
            die("Error uploading photo: " . $this->conn->error);
        }
    }
}
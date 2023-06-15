<?php
include("config.php");
include("firebaseRDB.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if($name ==""){ 
    echo "name is required";
}else if($name ==""){
    echo "email is required";
}else if ($password == ""){
    echo "Password is required";
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve= $rdb->retrieve ("/user", "email", "EQUAL", $email);
    $data =json_decode($retrieve, 1);

    if(isset($data['email'])){
        echo "email not regis";
    }else{
        $insert =$rdb->insert("/user", [
            "name"=>$name,
            "email"=>$email,
            "password"=>$password
        ]);

        $result=json_decode($insert, 1);
        if(isset($result['name'])){
            echo "signup berhasil";
            header("location: dashboard.php");
        }else{
            echo "signupgagal";
        }
        
    }

    // if(count($data)>0){
    //     echo "email already used";
    // }else{
    //     $insert= $rdb->insert("/user", [
    //         "name"=>$name,
    //         "email"=>$email,
    //         "password"=>$password
    //     ]);

    //     $result=json_decode($insert, 1);
    //     if(isset($result['name'])){
    //         echo "signup suscces, pease login";
    //     }else {
    //         echo "sign up failed";
    //     }

        
    // }
}
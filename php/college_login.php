<?php 
session_start();

if(isset($_POST['cname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $cname = $_POST['cname'];
    $pass = $_POST['pass'];

    $data = "cname=".$cname;
    
    if(empty($cname)){
    	$em = "User name is required";
    	header("Location: ../college_login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../college_login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM host WHERE collegename = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$cname]);

      if($stmt->rowCount() == 1){
          $admin = $stmt->fetch();

          $id =  $admin['id'];
          $collegename =  $admin['collegename'];
          $password =  $admin['password'];

          if($collegename === $cname){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['collegename'] = $collegename;
                 $_SESSION['password'] = $password;

                 header("Location: ../college_read.php");
                 exit;
             }else {
               $em = "Incorect Admin name or password";
               header("Location: ../college_login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect Admin name or password";
            header("Location: ../college_login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect Admin name or password";
         header("Location: ../college_login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../college_login.php?error=error");
	exit;
}
?>
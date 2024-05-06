<?php 

if(isset($_POST['eventname']) && 
isset($_POST['t1']) &&   
isset($_POST['t1mail']) &&
isset($_POST['t1no']) &&
isset($_POST['college_name'])
){

    include "../db_conn.php";

    $eventname = $_POST['eventname'];
    $t1 = $_POST['t1'];
    $t1mail = $_POST['t1mail'];
    $t1no = $_POST['t1no'];
    $college_name = $_POST['college_name'];

    $data = "eventname=".$eventname."&t1=".$t1."&t1mail=".$t1mail."&t1no=".$t1no."&college_name=".$college_name;
    
    if (empty($eventname)) {
        $em = "Event name is required";
        header("Location: ../apply.php?error=$em&$data");
        exit;
    } else if (empty($t1)) {
        $em = "Team member 1 name is required";
        header("Location: ../apply.php?error=$em&$data");
        exit;
    } else if (empty($t1mail)) {
        $em = "Team member 1 email is required";
        header("Location: ../apply.php?error=$em&$data");
        exit;
    } else if (empty($t1no)) {
        $em = "Team member 1 number is required";
        header("Location: ../apply.php?error=$em&$data");
        exit;
    } else if (empty($college_name)) {
        $em = "College name is required";
        header("Location: ../apply.php?error=$em&$data");
        exit;
    }else {
        
        if ((isset($_POST['t2']) && !empty($_POST['t2'])) && (isset($_POST['t2mail']) && !empty($_POST['t2mail'])) && (isset($_POST['t2no']) && !empty($_POST['t2no']))) {                  
         
         $t2 = $_POST['t2'];
         $t2mail = $_POST['t2mail'];
         $t2no = $_POST['t2no'];
         
        $sql = "INSERT INTO applied(eventname, t1, t2, t1mail, t2mail, t1no, t2no, college_name) 
        VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$eventname, $t1, $t2, $t1mail, $t2mail, $t1no, $t2no, $college_name]);

       	header("Location: ../apply.php?success=Your registeration is successfully completed");
   	    exit;
      }

      else if ((isset($_POST['t2']) && !empty($_POST['t2'])) && (isset($_POST['t3']) && !empty($_POST['t3'])) && (isset($_POST['t4']) && !empty($_POST['t4'])) && (isset($_POST['t2mail']) && !empty($_POST['t2mail'])) && (isset($_POST['t3mail']) && !empty($_POST['t3mail'])) && (isset($_POST['t4mail']) && !empty($_POST['t4mail'])) && (isset($_POST['t2no']) && !empty($_POST['t2no'])) && (isset($_POST['t3no']) && !empty($_POST['t3no'])) && (isset($_POST['t4no']) && !empty($_POST['t4no']))) {                  
         
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];
        $t4 = $_POST['t4'];
        $t2mail = $_POST['t2mail'];
        $t3mail = $_POST['t3mail'];
        $t4mail = $_POST['t4mail'];
        $t2no = $_POST['t2no'];
        $t3no = $_POST['t3no'];
        $t4no = $_POST['t4no'];
        
       $sql = "INSERT INTO applied(eventname, t1, t2, t3, t4, t1mail, t2mail, t3mail, t4mail, t1no, t2no, t3no, t4no, college_name) 
       VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$eventname, $t1, $t2, $t3,$t4, $t1mail, $t2mail, $t3mail,$t4mail, $t1no, $t2no, $t3no,$t4no, $college_name]);

       	header("Location: ../apply.php?success=Your registeration is successfully completed");
   	    exit;
     }
      
      else {
       $sql = "INSERT INTO applied(eventname, t1, t1mail, t1no, college_name) 
       VALUES(?,?,?,?,?)";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$eventname, $t1, $t1mail, $t1no, $college_name]);

       	header("Location: ../apply.php?success=Your registeration is successfully completed");
   	    exit;
      }
    }


}else {
	header("Location: ../apply.php?error=error");
	exit;
}
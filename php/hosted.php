<?php 

if(isset($_POST['ev_name']) && 
isset($_POST['org_name']) &&   
isset($_POST['org_email']) &&
isset($_POST['org_no']) &&
isset($_POST['opp_type']) &&
isset($_POST['web_url']) &&
isset($_POST['mode_ev']) &&
isset($_POST['loc']) &&
isset($_POST['basic_about']) &&
isset($_POST['rt_about']) &&
isset($_POST['s_date']) &&
isset($_POST['e_date']) &&
isset($_POST['detail_about']) &&
isset($_POST['dd_r_date']) &&
isset($_POST['dd_ev_date']) &&
isset($_POST['co_name']) &&
isset($_POST['co_email']) &&
isset($_POST['co_no']) &&
isset($_POST['prize_name']) &&
isset($_POST['prize_am']) &&
isset($_POST['fees'])){

    include "../db_conn.php";

    $ev_name = $_POST['ev_name'];
    $org_name = $_POST['org_name'];
    $org_email = $_POST['org_email'];
    $org_no = $_POST['org_no'];
    $opp_type = $_POST['opp_type'];
    $web_url = $_POST['web_url'];
    $mode_ev = $_POST['mode_ev'];
    $loc = $_POST['loc'];
    $basic_about = $_POST['basic_about'];
    $rt_about = $_POST['rt_about'];
    $s_date = $_POST['s_date'];
    $e_date = $_POST['e_date'];
    $detail_about = $_POST['detail_about'];
    $dd_r_date = $_POST['dd_r_date'];
    $dd_ev_date = $_POST['dd_ev_date'];
    $co_name = $_POST['co_name'];
    $co_email = $_POST['co_email'];
    $co_no = $_POST['co_no'];
    $prize_name = $_POST['prize_name'];
    $prize_am = $_POST['prize_am'];
    $fees = $_POST['fees'];

    $data = "ev_name=".$ev_name."&org_name=".$org_name."&org_email=".$org_email."&org_no=".$org_no."&opp_type=".$opp_type."&web_url=".$web_url."&mode_ev=".$mode_ev."&loc=".$loc."&basic_about=".$basic_about."&rt_about=".$rt_about."&s_date=".$s_date."&e_date=".$e_date."&detail_about=".$detail_about."&dd_r_date=".$dd_r_date."&dd_ev_date=".$dd_ev_date."&co_name=".$co_name."&co_email=".$co_email."&co_no=".$co_no."&prize_name=".$prize_name."&prize_am=".$prize_am."&fees=".$fees;
    
    if (empty($ev_name)) {
        $em = "Event name is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($org_name)) {
        $em = "Organization name is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($org_email)) {
        $em = "Organization email is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($org_no)) {
        $em = "Organization number is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($opp_type)) {
        $em = "Oppurtunity type is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($web_url)) {
        $em = "Website URL is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($mode_ev)) {
        $em = "Mode of event is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($loc)) {
        $em = "Location is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($basic_about)) {
        $em = "Basic about is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($rt_about)) {
        $em = "Round & timeline about is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($s_date)) {
        $em = "Start date is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($e_date)) {
        $em = "End date is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($detail_about)) {
        $em = "Detailed about is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($co_name)) {
        $em = "Coordinator name is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($co_email)) {
        $em = "Coordinator email is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($co_no)) {
        $em = "Coordinator number is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($prize_name)) {
        $em = "Prize name is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($prize_am)) {
        $em = "Prize amount is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    } else if (empty($fees)) {
        $em = "Fees is required";
        header("Location: ../host.php?error=$em&$data");
        exit;
    }else {

      if ((isset($_FILES['ev_banner']['name']) AND !empty($_FILES['ev_banner']['name'])) AND !(isset($_FILES['org_banner']['name']) AND !empty($_FILES['org_banner']['name']))) {
                  
         $img_name = $_FILES['ev_banner']['name'];
         $tmp_name = $_FILES['ev_banner']['tmp_name'];
         $error = $_FILES['ev_banner']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($ev_name, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO host(ev_name, org_name, ev_banner, org_email, org_no, opp_type, web_url, mode_ev, loc, basic_about, rt_about, s_date, e_date, detail_about, dd_r_date, dd_ev_date, co_name, co_email, co_no, prize_name, prize_am, fees) 
                 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$ev_name, $org_name, $new_img_name, $org_email, $org_no, $opp_type, $web_url, $mode_ev, $loc, $basic_about, $rt_about, $s_date, $e_date, $detail_about, $dd_r_date, $dd_ev_date, $co_name, $co_email, $co_no, $prize_name, $prize_am, $fees]);

               header("Location: ../host.php?success=Your account has been created successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../host.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../host.php?error=$em&$data");
            exit;
         }

        
      }
      else if ((isset($_FILES['org_banner']['name']) AND !empty($_FILES['org_banner']['name'])) AND !(isset($_FILES['ev_banner']['name']) AND !empty($_FILES['ev_banner']['name']))) {
                  
         $img_name = $_FILES['org_banner']['name'];
         $tmp_name = $_FILES['org_banner']['tmp_name'];
         $error = $_FILES['org_banner']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($ev_name, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO host(ev_name, org_name, org_banner, org_email, org_no, opp_type, web_url, mode_ev, loc, basic_about, rt_about, s_date, e_date, detail_about, dd_r_date, dd_ev_date, co_name, co_email, co_no, prize_name, prize_am, fees) 
                 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$ev_name, $org_name, $new_img_name, $org_email, $org_no, $opp_type, $web_url, $mode_ev, $loc, $basic_about, $rt_about, $s_date, $e_date, $detail_about, $dd_r_date, $dd_ev_date, $co_name, $co_email, $co_no, $prize_name, $prize_am, $fees]);

               header("Location: ../host.php?success=Your account has been created successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../host.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../host.php?error=$em&$data");
            exit;
         }       
      }
      else if ((isset($_FILES['org_banner']['name']) AND !empty($_FILES['org_banner']['name'])) AND (isset($_FILES['ev_banner']['name']) AND !empty($_FILES['ev_banner']['name']))) {
                  
         $img_name1 = $_FILES['org_banner']['name'];
         $tmp_name1 = $_FILES['org_banner']['tmp_name'];
         $error = $_FILES['org_banner']['error'];

         $img_name2 = $_FILES['ev_banner']['name'];
         $tmp_name2 = $_FILES['ev_banner']['tmp_name'];
         $error = $_FILES['ev_banner']['error'];
         
         if($error === 0){
            $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
            $img_ex_to_lc1 = strtolower($img_ex1);

            $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
            $img_ex_to_lc2 = strtolower($img_ex2);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if((in_array($img_ex_to_lc1, $allowed_exs)) AND (in_array($img_ex_to_lc2, $allowed_exs))){
               $new_img_name1 = uniqid($ev_name, true).'.'.$img_ex_to_lc1;
               $img_upload_path1 = '../upload/'.$new_img_name1;
               move_uploaded_file($tmp_name1, $img_upload_path1);

               $new_img_name2 = uniqid($ev_name, true).'.'.$img_ex_to_lc2;
               $img_upload_path2 = '../upload/'.$new_img_name2;
               move_uploaded_file($tmp_name2, $img_upload_path2);

               // Insert into Database
               $sql = "INSERT INTO host(ev_name, org_name, ev_banner, org_banner, org_email, org_no, opp_type, web_url, mode_ev, loc, basic_about, rt_about, s_date, e_date, detail_about, dd_r_date, dd_ev_date, co_name, co_email, co_no, prize_name, prize_am, fees) 
                 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$ev_name, $org_name, $new_img_name1, $new_img_name2, $org_email, $org_no, $opp_type, $web_url, $mode_ev, $loc, $basic_about, $rt_about, $s_date, $e_date, $detail_about, $dd_r_date, $dd_ev_date, $co_name, $co_email, $co_no, $prize_name, $prize_am, $fees]);

               header("Location: ../host.php?success=Your account has been created successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../host.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../host.php?error=$em&$data");
            exit;
         }       
      }
      else {
        $sql = "INSERT INTO host(ev_name, org_name, org_email, org_no, opp_type, web_url, mode_ev, loc, basic_about, rt_about, s_date, e_date, detail_about, dd_r_date, dd_ev_date, co_name, co_email, co_no, prize_name, prize_am, fees) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ev_name, $org_name, $org_email, $org_no, $opp_type, $web_url, $mode_ev, $loc, $basic_about, $rt_about, $s_date, $e_date, $detail_about, $dd_r_date, $dd_ev_date, $co_name, $co_email, $co_no, $prize_name, $prize_am, $fees]);

       	header("Location: ../host.php?success=Your account has been created successfully");
   	    exit;
      }
    }


}else {
	header("Location: ../host.php?error=error");
	exit;
}
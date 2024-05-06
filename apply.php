<?php 
session_start();
?>
<?php include "php/ap.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beyond</title>

  <!--Boostrap Links-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="css/ev.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
<div class="container login-form">
<div class="row mt-4 justify-content-center">
<div class="col-m-4">
	
	<form class="form-login" 
	action="php/apply.php" 
	method="post"
	enctype="multipart/form-data">
	
	<div class="card">
	<div class="card-body">
	<div class="offest-md-4">

                                <h4 class="display-4  fs-1">Applicants Details</h4><br>
                                <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                                <?php } ?>

                                <?php if(isset($_GET['success'])){ ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_GET['success']; ?>
                                </div>
                                <?php } ?>
                                <div class="mb-3">
                                    <label class="form-label">Event name</label>
                                    <!-- Retrieve ev_name from the query parameters and pre-fill the input field -->
                                    <input type="text" class="form-control" name="eventname" value="<?php echo isset($_GET['ev_name']) ? htmlspecialchars($_GET['ev_name']) : ''; ?>" readonly>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Team member 1 name</label>
                                    <input type="text" class="form-control" name="t1"
                                        value="<?php echo (isset($_GET['t1']))?$_GET['t1']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 2 name</label>
                                    <input type="text" class="form-control" name="t2"
                                        value="<?php echo (isset($_GET['t2']))?$_GET['t2']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 3 name</label>
                                    <input type="text" class="form-control" name="t3"
                                        value="<?php echo (isset($_GET['t3']))?$_GET['t3']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 4 name</label>
                                    <input type="text" class="form-control" name="t4"
                                        value="<?php echo (isset($_GET['t4']))?$_GET['t4']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Team member 1 email id</label>
                                    <input type="email" class="form-control" name="t1mail"
                                        value="<?php echo (isset($_GET['t1mail']))?$_GET['t1mail']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 2 email id</label>
                                    <input type="email" class="form-control" name="t2mail"
                                        value="<?php echo (isset($_GET['t2mail']))?$_GET['t2mail']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 3 email id</label>
                                    <input type="email" class="form-control" name="t3mail"
                                        value="<?php echo (isset($_GET['t3mail']))?$_GET['t3mail']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 4 email id</label>
                                    <input type="email" class="form-control" name="t4mail"
                                        value="<?php echo (isset($_GET['t4mail']))?$_GET['t4mail']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Team member 1 Phone Number</label>
                                    <input type="number" class="form-control" name="t1no"
                                        value="<?php echo (isset($_GET['t1no']))?$_GET['t1no']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 2 Phone Number</label>
                                    <input type="number" class="form-control" name="t2no"
                                        value="<?php echo (isset($_GET['t2no']))?$_GET['t2no']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 3 Phone Number</label>
                                    <input type="number" class="form-control" name="t3no"
                                        value="<?php echo (isset($_GET['t3no']))?$_GET['t3no']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team member 4 Phone Number</label>
                                    <input type="number" class="form-control" name="t4no"
                                        value="<?php echo (isset($_GET['t4no']))?$_GET['t4no']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">College Name</label>
                                    <input type="text" class="form-control" name="college_name"
                                        value="<?php echo (isset($_GET['college_name']))?$_GET['college_name']:"" ?>">
                                </div>

                                <button type="submit" class="btn btn-primary">Apply</button>

							</div>
						</div>
					</div>
					
				</form>


            </div>
        </div>
    </div>
</body>
</html>
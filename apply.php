<?php 
session_start();
?>
<?php include "php/ev.php"; ?>
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
	action="php/hosted.php" 
	method="post"
	enctype="multipart/form-data">
	
	<div class="card">
	<div class="card-body">
	<div class="offest-md-4">

                                <h4 class="display-4  fs-1">Basic Details</h4><br>
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
                                    <input type="text" class="form-control" name="ev_name"
                                        value="<?php echo (isset($_GET['ev_name']))?$_GET['ev_name']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Organization name</label>
                                    <input type="text" class="form-control" name="org_name"
                                        value="<?php echo (isset($_GET['org_name']))?$_GET['org_name']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Event banner</label>
                                    <input type="file" class="form-control" name="ev_banner">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Organization banner</label>
                                    <input type="file" class="form-control" name="org_banner">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Organization email id</label>
                                    <input type="email" class="form-control" name="org_email"
                                        value="<?php echo (isset($_GET['org_email']))?$_GET['org_email']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Organization Phone Number</label>
                                    <input type="number" class="form-control" name="org_no"
                                        value="<?php echo (isset($_GET['org_no']))?$_GET['org_no']:"" ?>">
                                </div>

                                <div class="mb-3">
									<label class="form-label">Opportunity type</label>
									<select class="form-select" name="opp_type">
										<option value="">Select</option>
										<option value="Hackthon" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Hackthon") ? "selected" : "" ?>>Hackthon</option>
										<option value="Quizzez" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Quizzez") ? "selected" : "" ?>>Quizzez</option>
										<option value="Workshop" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Workshop") ? "selected" : "" ?>>Workshop</option>
										<option value="Seminar" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Seminar") ? "selected" : "" ?>>Seminar</option>
										<option value="Competition" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Competition") ? "selected" : "" ?>>Competition</option>
										<option value="Coding Contest" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Coding Contest") ? "selected" : "" ?>>Coding Contest</option>
										<option value="Cultural Event" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Cultural Event") ? "selected" : "" ?>>Cultural Event</option>
										<option value="Seminar" <?php echo (isset($_GET['opp_type']) && $_GET['opp_type'] === "Seminar") ? "selected" : "" ?>>Seminar</option>
									</select>
								</div>


                                <div class="mb-3">
                                    <label class="form-label">Website URL</label>
                                    <input type="text" class="form-control" name="web_url"
                                        value="<?php echo (isset($_GET['web_url']))?$_GET['web_url']:"" ?>">
                                </div>

                                <div class="mb-3">
									<label class="form-label">Mode of Event</label><br>
									<input type="radio" 
										class="form-check-input"
										name="mode_ev"
										value="offline"
										<?php echo (isset($_GET['mode_ev']) && $_GET['mode_ev'] === "offline") ? "checked" : "" ?>>
									<label class="form-check-label">Offline</label><br>
									<input type="radio" 
										class="form-check-input"
										name="mode_ev"
										value="online"
										<?php echo (isset($_GET['mode_ev']) && $_GET['mode_ev'] === "online") ? "checked" : "" ?>>
									<label class="form-check-label">Online</label>
								</div>

                                <div class="mb-3">
                                    <label class="form-label">Organization Location</label>
                                    <input type="text" class="form-control" name="loc"
                                        value="<?php echo (isset($_GET['loc']))?$_GET['loc']:"" ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <textarea class="form-control" name="basic_about" rows="5" cols="8"
                                        value="<?php echo (isset($_GET['basic_about']))?$_GET['basic_about']:"" ?>"></textarea>
										<script>
											CKEDITOR.replace('basic_about');
										</script>
                                </div>



                                <h4 class="display-4  fs-1">Opputunity Details</h4><br>

                                <h4 class="display-4  fs-2">Round & Timeline</h4>
                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <textarea class="form-control" name="rt_about" rows="5" cols="8"
                                        value="<?php echo (isset($_GET['rt_about']))?$_GET['rt_about']:"" ?>"></textarea>
										<script>
											CKEDITOR.replace('rt_about');
										</script>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="datetime-local" class="form-control" name="s_date"
                                        value="<?php echo (isset($_GET['s_date']))?$_GET['s_date']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">End Date</label>
                                    <input type="datetime-local" class="form-control" name="e_date"
                                        value="<?php echo (isset($_GET['e_date']))?$_GET['e_date']:"" ?>">
                                </div>
                                <br>

                                <h4 class="display-4  fs-2">Details</h4>
                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <textarea class="form-control" name="detail_about" rows="5" cols="8"
                                        value="<?php echo (isset($_GET['detail_about']))?$_GET['detail_about']:"" ?>"></textarea>
										<script>
											CKEDITOR.replace('detail_about');
										</script>
                                </div>
                                <br>

                                <h4 class="display-4  fs-2">Dates & Deadlines</h4>
                                <div class="mb-3">
                                    <label class="form-label">Registration Date</label>
                                    <input type="datetime-local" class="form-control" name="dd_r_date"
                                        value="<?php echo (isset($_GET['dd_r_date']))?$_GET['dd_r_date']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Date</label>
                                    <input type="datetime-local" class="form-control" name="dd_ev_date"
                                        value="<?php echo (isset($_GET['dd_ev_date']))?$_GET['dd_ev_date']:"" ?>">
                                </div>
                                <br>

                                <h4 class="display-4  fs-2">Organizer details</h4>
                                <div class="mb-3">
                                    <label class="form-label">Organizer name</label>
                                    <input type="text" class="form-control" name="co_name"
                                        value="<?php echo (isset($_GET['co_name']))?$_GET['co_name']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Organizer email id</label>
                                    <input type="email" class="form-control" name="co_email"
                                        value="<?php echo (isset($_GET['co_email']))?$_GET['co_email']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Organizer Phone Number</label>
                                    <input type="number" class="form-control" name="co_no"
                                        value="<?php echo (isset($_GET['co_no']))?$_GET['co_no']:"" ?>">
                                </div>
                                <br>

                                <h4 class="display-4  fs-2">Prizes</h4>
                                <div class="mb-3">
                                    <label class="form-label">Prize name</label>
                                    <input type="text" class="form-control" name="prize_name"
                                        value="<?php echo (isset($_GET['prize_name']))?$_GET['prize_name']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Prize Amount</label>
                                    <input type="number" class="form-control" name="prize_am"
                                        value="<?php echo (isset($_GET['prize_am']))?$_GET['prize_am']:"" ?>">
                                </div>

                                <h4 class="display-4  fs-2">Fees</h4>
                                <div class="mb-3">
                                    <label class="form-label">Fees Amount</label>
                                    <input type="number" class="form-control" name="fees"
                                        value="<?php echo (isset($_GET['fees']))?$_GET['fees']:"" ?>">
                                </div>


                                <button type="submit" class="btn btn-primary">Host</button>

							</div>
						</div>
					</div>
					
				</form>


            </div>
        </div>
    </div>
</body>
</html>
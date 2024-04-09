<!doctype html>
<html lang="en">
<title>
    Skill Stream
</title>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
    <link rel="icon" href="images/title.PNG" type="image/x-icon">
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

                                <div class="mb-3"><!-- Need Update -->
                                    <label class="form-label">Oppurtunity type</label>
                                    <input type="text" class="form-control" name="opp_type"
                                        value="<?php echo (isset($_GET['opp_type']))?$_GET['opp_type']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Website URL</label>
                                    <input type="text" class="form-control" name="web_url"
                                        value="<?php echo (isset($_GET['web_url']))?$_GET['web_url']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Mode of Event</label><br>
                                    <input type="text" class="form-control" name="mode_ev"
                                        value="<?php echo (isset($_GET['mode_ev']))?$_GET['mode_ev']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Organization Location</label>
                                    <input type="text" class="form-control" name="loc"
                                        value="<?php echo (isset($_GET['loc']))?$_GET['loc']:"" ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <input type="text" class="form-control" name="basic_about"
                                        value="<?php echo (isset($_GET['basic_about']))?$_GET['basic_about']:"" ?>">
                                </div>



                                <h4 class="display-4  fs-1">Opputunity Details</h4><br>

                                <h4 class="display-4  fs-2">Round & Timeline</h4>
                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <input type="text" class="form-control" name="rt_about"
                                        value="<?php echo (isset($_GET['rt_about']))?$_GET['rt_about']:"" ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="text" class="form-control" name="s_date"
                                        value="<?php echo (isset($_GET['s_date']))?$_GET['s_date']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">End Date</label>
                                    <input type="text" class="form-control" name="e_date"
                                        value="<?php echo (isset($_GET['e_date']))?$_GET['e_date']:"" ?>">
                                </div>
                                <br>

                                <h4 class="display-4  fs-2">Details</h4>
                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <input type="text" class="form-control" name="detail_about"
                                        value="<?php echo (isset($_GET['detail_about']))?$_GET['detail_about']:"" ?>">
                                </div>
                                <br>

                                <h4 class="display-4  fs-2">Dates & Deadlines</h4>
                                <div class="mb-3">
                                    <label class="form-label">Registration Date</label>
                                    <input type="text" class="form-control" name="dd_r_date"
                                        value="<?php echo (isset($_GET['dd_r_date']))?$_GET['dd_r_date']:"" ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Date</label>
                                    <input type="text" class="form-control" name="dd_ev_date"
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
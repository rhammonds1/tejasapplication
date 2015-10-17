<?php 
$hasAccess = 1;
require_once 'functions/global-functions.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>TITLE</title>
	<meta name="description" content="">  
    
	<?php include 'includes/head.php'; ?>
    
</head>

<body>

	<?php include 'includes/header.php'; ?>

	<?php include 'includes/nav.php'; ?>

    <div class="container-fluid">
    	<div class="row">
		    <div class="col-sm-10 col-sm-offset-1">
                <form id="public" class="form-horizontal">
                    <fieldset>
                        <legend>Find A Class</legend>
                        <div class="form-group">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="class_search" placeholder="Enter a class name">
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-info">Search</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Results for Class Search</h5>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Register</legend>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Have you taken classes with us before?
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="participant_search" placeholder="Enter your email address">
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-info">Search</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Results for Participant Search</h5>
                        </div>
                        <div>
                            Sign Up Now
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Street Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Zip Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <input type="submit" class="btn btn-success" value="Register">
                
                </form>
			</div>
            <div class="col-sm-1">
            </div>
		</div>                            
    </div>
	
    <?php include 'includes/footer.php'; ?>

</body>
</html>
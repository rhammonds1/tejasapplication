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
        <form class="form-horizontal">
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
                        <label for="first_name" class="col-sm-2 text-right">First Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="first_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="col-sm-2 text-right">Last Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="last_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="street_address" class="col-sm-2 text-right">Street Address</label>
                        <div class="col-sm-6">
                            <input type="text" id="street_address" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-sm-2 text-right">City</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="state" class="col-sm-2 text-right">State</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="state">
                                <option>OH</option>
                                <option>KY</option>
                                <option>IN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zip" class="col-sm-2 text-right">Zip Code</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="zip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 text-right">Phone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 text-right">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthdate" class="col-sm-2 text-right">Date of Birth</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="birthdate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ethnicity" class="col-sm-2 text-right">Ethnicity</label>
                        <div class="col-sm-6">
                            <select multiple class="form-control" id="ethnicity">
                                <option>Martian</option>
                                <option>Terran</option>
                                <option>Jovian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="income" class="col-sm-2 text-right">Income</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="income">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-2 text-right">Gender</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guardian_first_name" class="col-sm-2 text-right">Guardian First Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="guardian_first_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guardian_last_name" class="col-sm-2 text-right">Guardian Last Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="guardian_last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guardian_phone" class="col-sm-2 text-right">Guardian Phone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="guardian_phone">
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group col-sm-8">
                <input type="submit" class="btn btn-success pull-right" value="Register">
            </div>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
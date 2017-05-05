<?php 
$errors = [];
$missing = [];
?>

<?php include '../includes/layout/header.php'; ?>
<!-- closing heading section -->
<div id="contentWrapper">

<div class="container">
<!-- action="../includes/form/process_mail.php" -->

<?php if ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated.</p>
<?php endif; ?>

<form data-toggle="validator" role="form" action="<?= $_SERVER['PHP_SELF']; ?>" enctype="application/x-www-form-urlencoded" method="post">
<section class="row">
<div class="col-md-6">

<fieldset> 
<legend>Basic Info</legend>

<!-- Name section -->
<div class="form-group has-feedback">
<label for="inputName" class="control-label">Name *
<?php if ($missing && in_array('name', $missing)) : ?>
<span class="warning">Please enter your first and last name.</span>
<?php endif; ?>
</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="text" class="form-control" id="inputName" placeholder="Your First and Last Name" data-error="Please enter your first and last name." name="name" required>
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>



<!-- Email section -->
<div class="form-group has-feedback">
<label for="inputEmail" class="control-label">Email *</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
<input type="email" class="form-control" id="inputEmail" placeholder="Your Email Address" data-error="Please enter your valid email address." name="email" required>
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>




<!-- Phone section -->
<div class="form-group has-feedback">
<label for="inputPhone" class="control-label">Phone *</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
<input type="text" pattern="\d{3}[\-]\d{3}[\-]\d{4}" maxlength="12" class="form-control" id="inputPhone" data-error="Please enter your valid phone number formatted as: 000-000-0000" placeholder="Your Phone Number" name="phone" required>
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>
</fieldset>

</div><!-- col-md-6 -->
<div class="col-md-6">

<fieldset>
<legend>Vehicle Info</legend>

<!-- Make section -->
<!-- The commented version below is the code that has required field validation. If I want Make to be required, us this commented code instead.
<div class="form-group has-feedback">
<label for="inputMake" class="control-label">Make</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="text" class="form-control" id="inputMake" placeholder="Make of your vehicle" data-error="Please enter the make of your vehicle" aria-describedby="makeStatus" name="make" required>
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>-->

<div class="form-group has-feedback">
<label for="inputMake" class="control-label">Make</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="text" class="form-control" id="inputMake" placeholder="Make of your vehicle" aria-describedby="makeStatus" name="make">
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>


<!-- Model section -->
<!-- The commented version below is the code that has required field validation. If I want Model to be required, us this commented code instead.
<div class="form-group has-feedback">
<label for="inputModel" class="control-label">Model</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="text" class="form-control" id="inputModel" placeholder="Model of your vehicle" data-error="Please enter the model of your vehicle" aria-describedby="modelStatus" name="model" required>
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div> --> 

<div class="form-group has-feedback">
<label for="inputModel" class="control-label">Model</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="text" class="form-control" id="inputModel" placeholder="Model of your vehicle" aria-describedby="modelStatus" name="model">
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>  


<!-- Year section -->
<!-- The commented version below is the code that has required field validation. If I want Year to be required, us this commented code instead.
<div class="form-group has-feedback">
<label for="inputYear" class="control-label">Year</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="date" class="form-control" id="inputYear" pattern="\d{4}" maxlength="4" placeholder="Year of your vehicle" data-error="Please enter the year of your vehicle" aria-describedby="yearStatus" name="year" required>
</div>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div>
</div>
--> 

<div class="form-group has-feedback">
<label for="inputYear" class="control-label">Year</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
<input type="text" class="form-control" id="inputYear" pattern="\d{4}" maxlength="4" placeholder="Year of your vehicle" aria-describedby="yearStatus" name="year">
</div><!-- /.input-group -->
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div><!-- /.help-block with-errors -->
</div><!-- /.form-group --> 
</fieldset>

</div><!-- col-md-6 -->
</section><!-- row -->


<section class="row">
<div class="col-xs-12">

<fieldset>
<legend>Other Info</legend>

<!-- Customer status section -->
<div class="form-group">
<label for="inputCustomer" class="control-label">Customer Type *</label>
<div class="radio">
<label>
<input type="radio" name="customer" data-error="Please enter if you are new or returning customer." required>
New Customer
</label>
</div><!-- /.radio section -->
<div class="radio">
<label>
<input type="radio" name="customer" data-error="Please enter if you are new or returning customer." required>
Returning Customer
</label>
<div class="help-block with-errors"></div><!-- /.help-block with-errors -->
</div><!-- /.radio section -->
</div><!-- /.form-group -->



<!-- Comments section -->
<div class="form-group has-feedback">
<label for="inputComments" class="control-label">Comments *</label>
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
<textarea type="text" class="form-control" id="inputComments" placeholder="Your Comments" data-error="Please enter your comments" aria-describedby="commentsStatus" name="comments" required></textarea>
</div><!-- /.input-group -->
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<div class="help-block with-errors"></div><!-- /.help-block with-errors -->
</div><!-- /.form-group has-feedback -->
</fieldset>
</div><!-- /.col-xs-12 -->
</section><!-- /.row -->

<div class="form-group">
<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span>Send</button>
<button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span>Clear</button>
</div><!-- /.form-group -->

</form>
</div> <!-- /.container -->
    
<?php /*?><pre>
	<?php
        if ($_GET) {
        echo 'Content of the $_GET array:<br>';
        print_r($_GET);
        } elseif ($_POST) {
        echo 'Content of the $_POST array:<br>';
		print_r($_POST);
        }
    ?>
</pre>    
<?php */?>    
<?php include '../includes/layout/footer.php'; ?> 
    
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration | Metropolitan Hotels & Resorts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/dropdown.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>

    <?php require 'templates/header.php' ?>

    
<form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="1">First Name</label>  
  <div class="col-md-4">
  <input id="1" name="1" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="2">Last Name</label>  
  <div class="col-md-4">
  <input id="2" name="2" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="3">CNIC No</label>  
  <div class="col-md-4">
  <input id="3" name="3" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Help</span>  
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Gender-0">
      <input type="checkbox" name="Gender" id="Gender-0" value="1">
      Male
    </label>
	</div>
  <div class="checkbox">
    <label for="Gender-1">
      <input type="checkbox" name="Gender" id="Gender-1" value="2">
      Female
        </label>
        </div>
    </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="5">Enter Password </label>
    <div class="col-md-4">
        <input id="5" name="5" type="password" placeholder="" class="form-control input-md" required="">
        <span class="help-block">Help</span>
    </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="6">Re-Enter Password</label>
    <div class="col-md-4">
        <input id="6" name="6" type="password" placeholder="" class="form-control input-md" required="">
        <span class="help-block">Help</span>
    </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="1"></label>
    <div class="col-md-8">
        <button id="1" name="1" class="btn btn-success">Save</button>
        <button id="2" name="2" class="btn btn-danger">Discard</button>
    </div>
    </div>

    </fieldset>
    </form>


    <?php require 'templates/footer.php' ?>

</body>

</html>
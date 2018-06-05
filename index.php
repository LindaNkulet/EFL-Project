<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login page</title>

  <!-- Bootstrap -->

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container " style="margin-top: 5%;">

   <form class="form-horizontal col-sm-offset-2" action="">

    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="username" placeholder="Enter username">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Password:</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>  

    <div class="row ">
      <div class="col-sm-5 col-sm-offset-3">
        <button type="submit" class="btn btn-primary">Click to Login </button>
      </div>
    </div>

    <div class="row" style="margin-top: 1%;">
      <div class="col-sm-5 col-sm-offset-3">
        No Account? <a href="#"> Sign up</a>
      </div>
    </div>
  </form>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

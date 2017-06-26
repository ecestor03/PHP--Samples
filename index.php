<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
		  <body>
					<div class="container">
							
							<h1>Create Database</h1>
							 <p>Create a database with table from front end.</p>
								  <?php
											
											if(isset($_GET['result'])){
												echo '<div class="alert alert-success">';
												echo '<strong>Success!</strong>' . $_GET['result'] . ' Thank you!'; 
												echo  '</div>';
											};
									?>
							
							<form name="bizLoginForm"  method="post" action="function.php" >
								  <div class="form-group">
											<label for="formGroupServerName">Server Name</label>
											<input type="text" name="text_servername" class="form-control " id="formGroupExampleInput" placeholder="required" required>
											<small class="form-text text-muted">Enter a  Server name</small>
								  </div>
								  <div class="form-group	">
											<label for="formGroupUsrname">Username</label>
											<input type="text" name="text_username"  class="form-control" id="formGroupExampleInput2" placeholder="required" required>
											<small class="form-text text-muted">Enter username</small>
								  </div>
								  <div class="form-group">
											<label for="formGroupPassword">Password</label>
											<input type="password" name="text_password" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="" >	
											<small class="form-text text-muted">Enter a username or leave blank</small>
								  </div>
								   <div class="form-group">
											<label for="formGroupPassword">Tablename</label>
											<input type="text" name="text_tablename" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="required" required>	
											<small class="form-text text-muted">Enter a table name.</small>
								  </div>
								  
								   <button type="submit" name="submit_dbcredential" class="btn btn-default">Create</button>
							</form>

					</div>

					<!-- jQuery first, then Tether, then Bootstrap JS. -->
					<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		 
		 </body>
</html>




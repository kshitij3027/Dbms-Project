
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="text-align:center;">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">MyCompany</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
    </ul>
  </div>
</nav>
<br/><br/><br/><br/>
	
	<button class="btn btn-primary" onclick="window.location.href = 'employeelogin.php';" style="text-align:center;">Login</button>
    	<button class="btn btn-primary" onclick="window.location.href = 'adminlogin.php';">Admin</button>
    <br/><br/><form action="dropdown.php" method="post">  
	  <button type="submit" class="btn btn-outline-success">Display Employees </button>
	 <br/><select name="departments">
	  <option value="Sales">Sales</option>
	  <option value="Marketing">Marketing</option>
	  <option value="HR">HR</option>
	  </select>
	  </form>
	  <br/><br/>
		 <form action="managelist.php" method="post"> 
	 <button type="submit" class="btn btn-outline-success">Employees Under Manager </button>
	 <select name="managers">
	  <option value="Vikram">Vikram</option>
	  <option value="Shruti">Shruti</option>
	  <option value="Seema">Seema</option>
	  </select>
	  </form><br/><br/>
	  	 <form action="projlist.php" method="post"> 
	 <button type="submit" class="btn btn-outline-success">Team Memebrs of Project </button>
	 <select name="project">
	  <option value="AdPlan">AdPlan</option>
	  <option value="NewProduct">NewProduct</option>
	  <option value="Schemadesign">Schemadesign</option>
	  </select>
	  </form><!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
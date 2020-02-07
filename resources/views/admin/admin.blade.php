
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/admin-login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery/admin_login_validation.js"></script>
<style type="text/css">
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.heading{
  text-align: center;
}
.div1{
  margin-top: 20%;
}
</style>
</head>

<body>

<form action="{{route('admin-login')}}"  method="post" style="max-width:500px;margin:auto">
	<div class="div1">
		<h2 class="heading">Admin Login</h2>
    <div id="message">
      <span class="error" style="color:red;font-weight:bold;">
        All fields are Mandatory
      </span>
    </div>
    <br>
  		<div class="input-container">
    		<i class="fa fa-envelope icon"></i>
    		<input class="input-field" type="text" class="email" placeholder="Email" name="email" required="true" >
  		</div>
  
  		<div class="input-container">
    		<i class="fa fa-key icon"></i>
    		<input class="input-field" type="password" class="password"  placeholder="Password" name="password" required="true">
  		</div>

  		<input type="submit" value="Login" class="btn" name="submit">
  	</div>
</form>
		
  

</body>
</html>


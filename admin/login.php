<?php 
    ob_start();
    session_start();
    if(isset($_SESSION['admin_username'])) header("location:index.php");
    include "../includes/config.php";
    
    
    /** PROSES LOGIN**/
if(isset($_POST["submit_login"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $sql_login = mysqli_query($conn,"SELECT * FROM admin 
                                    WHERE username='$username' AND password='$password' ");

    if(mysqli_num_rows($sql_login)>0){
        $row_admin=mysqli_fetch_array($sql_login);
        $_SESSION['admin_id'] = $row_admin["id_admin"];
        $_SESSION['admin_username'] = $row_username["username"];
        header("location:index.php");
    } else {    
        header("location:login.php?failed");
    }
}

?>

<!doctype html>
<html lang="en" debug="true">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<link rel="icon" href="../../../../favicon.ico"/>
		<title>Borneo Construction login</title>
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link href="../css/signin.css" rel="stylesheet"/>
	</head>
	<body class="">
		<form class="form-signin text-center" method="post">
			<img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"/>
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="text"  id="inputEmail" class="form-control" placeholder="Email address"  autofocus="" name="username"/>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="password"/>
			<div class="checkbox mb-3">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_login">Sign in</button>
			<p class="mt-5 mb-3 text-muted">© 2017-2018</p>
		</form>
	</body>
		
</html>

<?php 
	mysqli_close($conn);
	ob_end_flush()
?>
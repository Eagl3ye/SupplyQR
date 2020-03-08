<?php
	if(isset($_POST['gateway_login'])) 
	{
		$email = $_POST['login_email'];
		$pass = $_POST['login_pass'];
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT * FROM userdata";

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$valpass = pg_fetch_row($rs);
		echo $valpass[0];
		//if($valpass[pass] == $pass){
		//	echo '<div class="text-light">Right password</div>';
		//}else{
		//}
	}
?>

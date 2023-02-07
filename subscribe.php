<? php 
if($_POST['message']) {
	mail("mosesgrey5@gmail.com",
	 subject, 
	 $_POST['message']
	)
}

?>
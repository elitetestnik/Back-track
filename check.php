<?php

//ПЕРЕХОД ПО ССЫЛКЕ ЧЕРЕЗ ПРОКСИ-ФОРМУ
function forward($url){
?>
	<form id="proxyform" action="<?php echo $url; ?>" method="post">
		<input type="hidden" name="username" value="<?php echo $_POST['username']; ?>" />
		<input type="hidden" name="passwd" value="<?php echo $_POST['passwd']; ?>" />
	</form>
	<script type="text/javascript">
	document.getElementById('proxyform').submit();
	</script>
<?php	
}


if ((isset($_POST['username']))&&(isset($_POST['passwd']))) {

	$url=0;
	switch ($_POST['username']){
case "stenolav": $url="http://back-track.no/sohm/index.php"; break;	
case "oleg":     $url="http://back-track.no/sohm/index.php";break;

case "testagency":$url="http://back-track.no/testagency/index.php"; break;
case "kurtnilsen":$url="http://back-track.no/testagency/index.php"; break;

case "stenolav2": $url="http://www.stenolav-management.no/norsk"; break; 		
case "demo3":     $url="http://back-track.no/demo3/index.php"; break;	
		
		 
		
		default: header('Location: /'); break;
			
	}

	forward($url);

}else{
	header('Location: /');
}

?>
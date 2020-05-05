<?php
$server='localhost';
$user='root';
$password='';
$db='coronadb';

$con =mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	<script >
		
	</script>
	<?php
}else{
	?>
	<script >
		alert("Connection failed")
	</script>
	<?php
}
?>
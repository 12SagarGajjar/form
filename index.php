<?php
$password=$city=$gender=$education=$name="";
	// echo '<pre>';
	// print_r($_POST);
	if(isset($_POST['btns'])){
		$name=$_POST['name'];
		$password=$_POST['password'];
		$city=$_POST['city'];
		$gender=$_POST['gender'];
		$education=$_POST['education'];
		$education=implode(",", $education);
		echo"<br>";

		echo"Name:- $name<br>";
		echo"Password:- $password<br>";
		echo"City:- $city<br>";
		echo"Gender:- $gender<br>";
		echo"Education:- $education<br>";
		echo"<br>";
	}
?>
<form method="post">
	Name:- <input type="textbox" name="name" /> <br><br>
	Password:- <input type="password" name="password" /> <br><br>
	Gender:- 
	<input type="radio" name="gender" value="Male" />Male 
	<input type="radio" name="gender" value="Female" />Female 
	<br><br>
	City:-
	<?php
	$cityarr=array('Ahmedabad','Delhi','Mumbai','Surat');
	?>
	<select name="city" id="">
		<option value="">Select City</option>
		<?php foreach($cityarr as $list) {?>
		<option ><?php echo $list?></option>
	<?php }?>
	</select><br><br>
	Education:-
	<input type="checkbox" name="education[]" value="Diploma" >
	<input type="checkbox" name="education[]" value="B.tech">B.tech
	<input type="checkbox" name="education[]" value="M.tech">M.tech
	<input type="checkbox" name="education[]" value="B.sc">B.sc <br><br>
	<input type="submit" value="submit" name="btns" />
	<a href="form enter.php">Refresh</a>
</form>
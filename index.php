<?php
	require_once "init.php";
	$result = $testModel->getTests();
    $session->clear();
?>
<!DOCTYPE html>
<html>
<head>
   <title> Test </title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="http://cdn-image.travelandleisure.com/sites/default/files/1474125798/alberta-canada-AURORA0916.jpg">
	<header class="myHeader"> Check your knowledge here </header>

	<form class="myForm" name="myForm" onsubmit="return validateForm()" type="text" method="get" action="post.php">
		<input placeholder="Name" name="name" > <!--Name enter-->
		</br>
		<select style="width: 170px; margin-top:15px" name="test"> <!-- Test choosing-->
			<option value=""> </option>
			<?php foreach ($result as $v) { ?>
				<option value="<?= $v['id_test'] ?>"><?=$v['Name']?></option>
			<?php } ?>
		</select>
		</br>
		<button class="myButton" type='submit'> Start </button>
	</form>
	<script>
		function validateForm() {
			var x = document.forms["myForm"]["name"].value;       //Name is entered or not(check)
			if (x == "") {
				alert("Name must be filled!");
				return false;
			}

			var x = document.forms["myForm"]["Tests"].value;      //Test is choosen or not
			if (x == "") {
				alert("Please, choose a test!");
				return false;
			}
		}
	</script>
</body>
</html>
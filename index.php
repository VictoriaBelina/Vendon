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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container" background="http://nonessentials.org/wp-content/uploads/2014/01/dots-small-pattern.png">
	<header class="myHeader"> Check your knowledge here </header>

	<form class="myForm" name="myForm" onsubmit="return validateForm()" type="text" method="get" action="post.php">
        <div class="form-group">
            <input placeholder="Name" name="name" > <!--Name enter-->
        </div>
        <div class="form-group">
            <select style="width: 206px; margin-top:15px" name="test"> <!-- Test choosing-->
                <option value=""> </option>
                <?php foreach ($result as $v) { ?>
                    <option value="<?= $v['id_test'] ?>"><?=$v['Name']?></option>
                <?php } ?>
            </select>
        </div>
            <button  class="btn btn-primary btn-block" type='submit'> Start </button>

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
<?php
	require_once "init.php";
	$result = $testModel->getTests();    //Get tests from DB to var result
    $session->clear();    //clear session
?>
<!DOCTYPE html>
<html>
<head>
   <title> Test </title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
                    <option value="<?= $v['id_test'] ?>"><?=$v['Name']?></option>      <!--Get test names from DB to dropdown -->
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

			var x = document.forms["myForm"]["test"].value;      //Test is choosen or not
			if (x == "") {
				alert("Please, choose a test!");
				return false;
			}
		}
	</script>
</body>
</html>
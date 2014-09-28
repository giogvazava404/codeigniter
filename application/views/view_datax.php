<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
    <base href="http://localhost/ci_intro/" />
</head>
<body>
<a href="site/home">Home</a>
<a href="site/about">About us</a>
<br />
<?php
echo "<pre>";
print_r($db);
echo "</pre>";
?>
</body>
</html>
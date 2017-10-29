<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	$error = false;
	$res=mysql_query("SELECT tot FROM stg1;");
	$userRow=mysql_fetch_array($res);
	$nam=$userRow['username'];

	if ( isset($_POST['btn-submit']) )
	{

		// clean user inputs to prevent sql injections
		$an1 = trim($_POST['an1']);
		$an1 = strip_tags($an1);
		$an1 = htmlspecialchars($an1);
		if($an1=="node js")
		{
			$an1 ="1";
		}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scoreboard - WTechC</title>

    <link rel="stylesheet" href="assets/css/user-profiles-lists/user-profiles-list-minimal.css">

</head>
<body>

    <ul class="user-profiles-list-minimal">

        <li>

            <div class="user-avatar">
                <a href="#">
                    <img src="assets/images/avatars/1.jpg" width="41" alt="" />
                </a>
            </div>

            <p class="user-name">
                <a href="">Mark Smith Peterson</a>
                <span>12 mutual friends</span>
            </p>

        </li>

        <li>

            <div class="user-avatar">
                <a href="#">
                    <img src="assets/images/avatars/2.jpg" width="41" alt="" />
                </a>
            </div>

            <p class="user-name">
                <a href="">Jeniffer Johnson</a>
                <span>3 mutual friends</span>
            </p>

        </li>

        <li>

            <div class="user-avatar">
                <a href="#">
                    <img src="assets/images/avatars/3.jpg" width="41" alt="">
                </a>
            </div>

            <p class="user-name">
                <a href="">Max Power</a>
                <span>9 mutual friends</span>
            </p>

        </li>

        <li>

            <div class="user-avatar">
                <a href="#">
                    <img src="assets/images/avatars/4.jpg" width="41" alt="" />
                </a>
            </div>

            <p class="user-name">
                <a href="">Owen Christians</a>
                <span>4 mutual friends</span>
            </p>

        </li>

        <li>

            <div class="user-avatar">
                <a href="#">
                    <img src="assets/images/avatars/5.jpg" width="41" alt="" />
                </a>
            </div>

            <p class="user-name">
                <a href="">Tracey Parker</a>
                <span>7 mutual friends</span>
            </p>

        </li>

    </ul>

</body>

</html>

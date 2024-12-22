<?php
session_start();
$total_score = $_SESSION['score_page1'] + $_SESSION['score_page2'] + $_SESSION['score_page3'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
<h1>Your Result</h1>
<p>Total Score: <?= $total_score ?></p>
</body>
</html>

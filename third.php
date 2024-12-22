<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correct_answers_page3 = ['text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'text7', 'text8', 'text9', 'text10'];
    $score = 0;

    foreach ($correct_answers_page3 as $index => $correct_answer) {
        $question_name = "quest" . ($index + 1);
        if (isset($_POST[$question_name]) && strtolower($_POST[$question_name]) === strtolower($correct_answer)) {
            $score += 5;
        }
    }

    $_SESSION['score_page3'] = $score;
    header('Location: result.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
</head>
<body>
<form method="post" action="">
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <p>Question <?= $i ?></p>
        <input type="text" name="quest<?= $i ?>"><br>
    <?php endfor; ?>
    <button type="submit">Finish</button>
</form>
</body>
</html>

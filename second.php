<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correct_answers_page2 = [
        ['Answer1', 'Answer3'],
        ['Answer2', 'Answer4'],
        ['Answer5', 'Answer6'],
        ['Answer7', 'Answer8'],
        ['Answer9', 'Answer10'],
    ];
    $score = 0;

    foreach ($correct_answers_page2 as $index => $correct_answers) {
        $question_name = "quest" . ($index + 1);
        if (isset($_POST[$question_name]) && array_diff($correct_answers, $_POST[$question_name]) === []) {$score += 3;}
    }
    $_SESSION['score_page2'] = $score;
    header('Location: page3.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
</head>
<body>
<form method="post" action="">
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <p>Question <?= $i ?></p>
        <?php for ($j = 1; $j <= 4; $j++): ?>
            <input type="checkbox" name="quest<?= $i ?>[]" value="Answer<?= $j ?>" id="q<?= $i ?>a<?= $j ?>">
            <label for="q<?= $i ?>a<?= $j ?>">Answer<?= $j ?></label><br>
        <?php endfor; ?>
    <?php endfor; ?>
    <button type="submit">Next</button>
</form>
</body>
</html>

<?php




if (!($_POST['name'] && $_POST['surname'] && $_POST['birthDate'])) {
    $redirectUrl = $_SERVER['HTTP_REFERER'];
    $redirectUrl = substr($redirectUrl, 0, strpos($redirectUrl, "/?"));
    print_r($redirectUrl);
    header('Location: ' . $redirectUrl . '?message=Введите корректные данные');
// Эта хуйня редиректит нас (отправляет GET запрос) на $_SERVER['HTTP_REFERER'] и добавляет GET параметр message, который равняется введите..
}


?>



<html lang="en">
<head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Sit</title>
</head>
<body>
<p>
    Имя: <?= $_POST['name'] ?> <br>
    Фамилия: <?= $_POST['surname'] ?> <br>
    Дата рождения: <?= $_POST['birthDate'] ?> <br>
</p>

</body>
</html>






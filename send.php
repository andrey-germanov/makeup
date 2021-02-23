<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Заявка успешно отправлена!</title>
</head>
<style>
    html{
        color: black;
        font-family: 'Raleway';
        display: flex;
        justify-content: center;
    }
    *{
        box-sizing: border-box;
    }
    div{
        margin-top: 50px;
        width: 100%;
        max-width: 100%;
        box-shadow:  0px 0px 150px #a0a0a088;
        border-radius: 30px;
        padding: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    body{
        padding: 20px;
    }
    a{
        color: Black;
        font-size: 20px;
        text-decoration: none;
        cursor: pointer;
        display: flex;
        align-items: center;
    }
    img{
        height: 25px;
        padding-right: 10px;
    }
</style>
<body>
   <a href="/index.html">Вернутся назад</a>
   <div>
        <p style="font-size: 30px;">Спасибо!</p>
        <p style="font-size: 20px;">Заявка успешно отправлена!</p>
        <p style="font-size: 10px;">Руководство свяжется с Вами в течении дня для консультации.</p>
    </div>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?> 
    <form action="send.php" method="post">
    <input type="text" name="email" required>
    <textarea type="text" name="text" cols="30" rows="3"></textarea>
    <input type="submit" value="Отправить">
    </form> 
<?php
} else {
//показываем форму
    $fio = $_POST['email'];
    $email = $_POST['text'];
    $fio = htmlspecialchars($email);
    $email = htmlspecialchars($text);
    $fio = urldecode($email);
    $email = urldecode($text);
    $fio = trim($email);
    $email = trim($text);
    if (mail("crossfitgerman@gmail.com", "Заявка с сайта", "Имя:".$email.". Телефон: ".$text ,"From: asfalt-titan.com \r\n")){
    echo "";
    } else {
    echo "";
    }
}
?>
</body>
</html>
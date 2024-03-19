<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestBd</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <style>
       
    </style>
</head>
<body class="container">
    <?php
    $host='localhost';
    $db='ttt';
    $user='root';
    $password='';

    $link=mysqli_connect($host,$user,$password,$db) or die("Ошибка".mysqli_error($link));
        if(isset ($_POST['Familia']) && isset ($_POST['Ima']) && isset($_POST['Otchestvo']) && isset ($_POST['Login']) && isset ($_POST['Parol'])&& isset ($_POST['Telefon'])){
        $Fam=$_POST['Familia'];
        $Ima=$_POST['Ima'];
        $Otchestvo=$_POST['Otchestvo'];
        $Log=$_POST['Login'];
        $password = $_POST['Parol'];
        $tel = $_POST['Telefon'];
        if($Fam && $Ima && $Otchestvo && $Log && $password && $tel){
            $query = "insert into polzovatel(Familia,Ima,Otchestvo,Login,Parol,Telefon) values('$Fam', '$Ima', '$Otchestvo','$Log', '$password', '$tel')";
            $result = mysqli_query($link, $query) or die ("Ошибка".mysqli_error($link));
            header("Location: Avtori.php");
            
            }
            
            }
            
    ?>
    <div class="form-group">
        <h1>Регистрация</h1>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="Familia" placeholder="Фамилия" pattern="[А-Яа-яЁё\s]+" minlength="3" maxlength="150" required="">
            </div>
            <div class="form-group">
                <input type="text" name="Ima" placeholder="Имя" pattern="[А-Яа-яЁё\s]+" minlength="3" maxlength="150" required="">
            </div>
            <div class="form-group">
                <input type="text" name="Otchestvo" placeholder="Отчество" pattern="[А-Яа-яЁё\s]+" minlength="3" maxlength="150" required="">
            </div>
            <div class="form-group">
                <input type="text" name="Login" placeholder="Логин" minlength="3" maxlength="50" required="">
            </div>
            <div class="form-group">
                <input type="password" name="Parol" placeholder="Пароль" minlength="6" maxlength="12" required="">
            </div>
            <div class="form-group">
                <input type="text" name="Telefon" placeholder="Телефон" minlength="6" maxlength="12" required="">
            </div>
            <button type="submit"><b>Зарегистрироваться</b></button>
        </form>
    </div>
</body>
</html>
<?php
error_reporting(E_ALL);
session_start();

if (!empty($_POST['password']) and !empty($_POST['login'])){
  $login = $_POST['login'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
  $res = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($res);

  if (!empty($user)){
    $_SESSION['auth'] = true;
  }else{
    echo "Неверный логин или пароль!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Электронный учебник</title>
    <link rel="stylesheet" href="sign-in.css">
    <link rel="stylesheet" href="img/transparter.png">
</head>
<body>
  <header class="header-2">
    <nav class="container-2 header-nav-2">
      <a href="index.html" class="header-logo-2">
          <img class="img" src="img/Group 5.svg" alt="">
      </a>
      <div>
        <a href="sign-in.php" class="header-link" href="#">Войти</a>
        <a href="registration.php" class="header-link" href="#">Регистрация</a>  
      </div>
    </nav>
  </header>
      <main>
        <form action="#" class="form">
        
         <div class="center-block">
          <h2 class="text-form">Форма входа</h2>    
      </div>
      <div class="form-count">
      <div class="Email">
        <input type="email" class="email" placeholder="Введите email"></input>
      </div>
      <div class="Password">
        <input type="password" class="password" placeholder="Введите пароль"></input>
      </div>
      
      <button class="auto">Авторизоваться</button>

      <div class="text-down">
        <p>У вас нет учетной записи? <a class="sign-in-reg" href="registration.php">Зарегистрироваться</a></p>
      </div>
    </div>
        </form>
      </main>
        <footer class="block-info-4">
          <div class="block container">
              <p class="telefon">8-800-700-93-29</p>
              <p class="zvonok">Звонок по России бесплатный</p>
              <a href="#"><img class="telegram" src="img/icons8-телеграмма-app-48.png" alt=""></a>
              <a href="#"><img class="img-vk" src="img/icons8-vk-48.png" alt=""></a>
          </div>
      </footer>   
</body>
</html>


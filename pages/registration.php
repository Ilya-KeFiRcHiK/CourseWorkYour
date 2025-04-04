<?php
require_once('config/link.php');

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $login = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $telefon = $_POST['number'];
  $sql = "INSERT INTO users (login, password, name, gender, telefon) VALUES ('$login', '$password', '$name', '$gender', '$telefon')";
  $conn->query($sql);
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Электронный учебник</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="img/transparter.png">
</head>
<body>
    <header class="header-2">
        <nav class="container-2 header-nav-2">
          <a href="index.html" class="header-logo-2">
              <img src="img/Group 5.svg" alt="">
          </a>
          <div>
        <a href="sign-in.html" class="header-link" href="sign-in.html">Войти</a>
        <a href="registration.html" class="header-link" href="registration.html">Регистрация</a>
        </div> 
        </nav>
      </header>
      <main>
        <form action="#" class="form">
          
          
            <h2 class="text-form">Форма регистрации</h2>
        <div class="form-count">
        <div class="Name">
          <input type="name" class="name" placeholder="Введите ваше имя"></input>
        </div>
        <div class="Mail">
          <input type="mail" class="mail" placeholder="Введите вашу почту"></input>
        </div>
        <div class="Telefon">
          <input type="telefon" class="telefon" placeholder="Введите ваш номер телефона"></input>
        </div><br>
        <div class="Gender">
          <h5 class="pol">Выберите ваш пол</h5><br>
          <input type="radio" name="gender" class="gender1" id="gender1">
          <label for="gender1">Мужской</label>
          <input type="radio" name="gender" class="gender2" id="gender2">
          <label for="gender2">Женский</label>
        </div><br>
        <div class="Password">
          <input type="password" class="password" placeholder="Введите пароль"></input>
        </div>
        <button type="submit" class="auto">Зарегистрироваться</button>
        <div class="text-down"><br>
          <p class="t-d">Вы уже зарегистрированы? <a class="sign-in-reg" href="sign-in.html">Войти</a></p>
        </div>
      </div>
        </form>
      </main>
      <footer class="block-info-4">
        <div class="block container">
            <p class="telefon-number">8-800-700-93-29</p>
            <p class="zvonok">Звонок по России бесплатный</p>
            <a href="#"><img class="telegram" src="img/icons8-телеграмма-app-48.png" alt=""></a>
            <a href="#"><img class="img-vk" src="img/icons8-vk-48.png" alt=""></a>
        </div>
    </footer>
</body>
</html>
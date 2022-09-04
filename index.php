









<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Троицкая пекарня - главная страница</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fonts.css" >
    <link rel="stylesheet" href="css/style.css" >
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>





</head>


<body>
<!-- входа, регистрации пользовательского соглашения -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModal"> Вход в личный кабинет</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form name="loginForm" method="POST" >
          <div class="modal-body" >
            <label>Логин:</label>
              <input type="text" class="form-control" id="loginNameUser" placeholder="Введите логин" title="Введите логин">
            <label>Пароль:</label>
              <input type="password" class="form-control" id="passwordUser" placeholder="Введите пароль" title="Введите пароль">
          
          <div >
            <a href="#" id="buttonRegAndRecPassUser"   data-bs-toggle="modal"  data-bs-target="#registerModal">Зарегистрироваться</a>
            <a href="#"  id="buttonRegAndRecPassUser">Напомнить пароль</a>   
          </div>

          </div>
      </form>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
        <button type="post" class="btn btn-primary">Войти</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModal">Регистрация нового пользователя</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form name="registerForm" method="POST" >
          <div class="modal-body" >
            <label>Название магазина:</label>
              <input type="text" class="form-control" id="nameShopRegister" placeholder="Введите название магазина" title="Введите логин">
              <label>Представитель:</label>
              <input type="text" class="form-control" id="fioAgentRegister" placeholder="Введите ФИО представителя" title="Введите логин">
              <label>Номер телефона:</label>
              <input type="text" class="form-control" id="telephoneRegister" placeholder="Введите логин" title="Введите логин">
              <label>Email:</label>
              <input type="text" class="form-control" id="emailRegister" placeholder="Введите email" title="Введите логин">

              
              <label>Логин:</label>
              <input type="text" class="form-control" id="loginNameRegister" placeholder="Введите логин" title="Введите логин">

            
              <label>Пароль:</label>
              <input type="password" class="form-control" id="passwordRegister" placeholder="Введите пароль" title="Введите пароль">
          
          <div >
          <div class="form-check" id="userAgreement">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1" >Я согласен с   <a href="" id="userAgreementLink" data-bs-toggle="modal"  data-bs-target="#userAgreementsModal">пользовательским соглашением.</a> </label> 
          </div>
        </div>

          </div>
      </form>
      
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
        <button type="post" class="btn btn-primary">Зарегистрироваться</button>
      </div>
    </div>
  </div>
</div>





















<div class="modal fade" data-bs-backdrop="static" id="userAgreementsModal"  aria-labelledby="userAgreementsModal" >
  <div class="modal-dialog modal-dialog-scrollable" >
    <div class="modal-content" id="userAgreements">
      <div class="modal-header">
        <h5 class="modal-title" id="userAgreementsModal" > Пользовательское соглашение</h5>
        <a  data-bs-toggle="modal"  data-bs-target="#registerModal"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <div class="modal-body">
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Это некоторый заполнитель, чтобы показать поведение прокрутки для модальных окон. </font><font style="vertical-align: inherit;">Мы используем повторяющиеся разрывы строк, чтобы продемонстрировать, как содержимое может превышать минимальную внутреннюю высоту, тем самым показывая внутреннюю прокрутку. </font><font style="vertical-align: inherit;">Когда содержимое становится длиннее предопределенной максимальной высоты модального окна, содержимое будет обрезано и прокручивается внутри модального окна.</font></font></p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Этот контент должен появиться внизу после прокрутки.</font></font></p>
      </div>


    
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>









<!-- Всплывающие окна входа, регистрации пользовательского соглашения конец раздела -->

<div class="progressbarPage">
  <div class="progressbarPageLine">

  </div>
</div>




<header class="header">

    <div class="container">
        <a href="/" class="logo"><img src="img/logo.png" alt="Троицкая пекарня" title="Троицкая пекарня"></a>
        <div id="phones_bakery">
            
            <img id="icon_phone" src="img/home_phone_icon.png" title="Мобильный телефон">
            <a id="telephone" href="tel:+3805011111111" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right" title="Совершить звонок">+3805011111111</a>
           
            <img id="icon_phone" src="img/viber_icon.png" title="Наш вайбер">
            <a id="telephone" href="viber://chat?number=+3805011111111" title="Начать чат">+3805011111111</a>

            <img id="icon_phone" src="img/telegram_icon.png" title="Наш телеграм">
            <a id="telephone" href="tg://resolve?domain=bakery_troitskbot" title="Начать чат">bakery_troitskbot</a>

            <img id="icon_phone" src="img/mail_icon.png" title="Наша почта">
            <a id="telephone" href="mailto:flpdet@mail.ru" title="Написать письмо">flpdet@mail.ru</a>

        </div>

        <nav>
            <ul>
                <li><a href="">главная</a></li> 
                <li><a href="">Продукция</a></li>
                <li><a href="">Новости</a></li>
                <li><a href="">О нас</a></li>

            </ul>
        </nav>
    </div>



    



    <div class="loginForm">
        <div id="basket">
            <img src="img/basked_icon.png">
            <p id="countShop">1</p>
    
        </div>

        <div id="buttonFormLogin">
            <div ><a href="#" id="loginButton" data-bs-toggle="modal"  data-bs-target="#loginModal">Войти</a></div>
            <div ><a href="#" id="loginButton" data-bs-toggle="modal"  data-bs-target="#registerModal">Регистрация</a></div>
            <div>
        </div>

    </div>







    








</header>

<div class="main">
    <div class="container">
        <div id="hello">
          

        <div>
          <h2 id="fontHeadingStyle">Наша продукция</h2>
          <p>ghjgjgjhgjgjgjgjghjgjhghjgjgjgjgjhgjgjgjgjghjjgjh</p>
        </div>

        




        </div>
        <div id="hello"><p>Добро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаолькуыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущкДобро пожаловатьвыавыаывавыаовыраорвыоларвылравылраывауцгш3тшщоуклоеуьаольку
            уклеуокеошукщоещшукоешщкуоещокуещукощеукоещукоещукоещкуоещукоещкуоеущкоеущк
        </p> </div>
    </div>

</div>



<footer>
  <div class="container">

    <div>

    <p>&copy;2000 - <?php echo date("Y"); ?>. Троицкая пекарня - самая вкусная выпечка у нас!  Все права защищены.</p>

    
    </div>





  </div>






</footer>


<script src="js/additionalScript.js"></script>
</body>






</html>
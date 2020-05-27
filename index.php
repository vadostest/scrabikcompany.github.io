<? session_start();
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign']; 
$_SESSION['server']['referer'] = $_SERVER['HTTP_REFERER'];
include ('config.php');
$price_old=floor(($price_new/(100-$skidka))*100);

?>
<!DOCTYPE html>

<html>
<head>
    <title>Натуральный убтан Bel'etage от пигментных и красных пятен на лице</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=480" name="viewport">
    <meta content="Удаляет пигментные и красные пятна на лице. Подтягивает кожу, делает ее более упругой, гладкой и сияющей. Купить онлайн со скидкой." name="description">
    <meta content="убтан beletage, убтан, купить убтан beletage, убтан beletage отзывы, Белетаж" name="keywords">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link href="css/settings.css" rel="stylesheet" type="text/css">
    <link href="css/slick.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript">
    </script>
    <link href="fonts/roboto.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js" type="text/javascript">
    </script>
    <script src="js/plugins.js" type="text/javascript">
    </script>
    <script src="js/detect.js" type="text/javascript">
    </script>
    <script src="js/vtracker.js" type="text/javascript">
    </script><?= $head_index ?>
 

<!-- Ниже вставить код пикселя -->

</head>
<body>

    <?= $body_index  ?>
    <div class="main-wrap">
        <section class="block-1">
            <h1 style="color:#000;">Натуральный убтан от пигментных и красных пятен</h1>
         
<!--<section class="block-1" style="background-color:#000000;">
            <center><h2 style="color:#ffffff;">+ маска для лица в подарок!</h2></center></section>-->

            <div class="container-1">
                <div class="sale">
                    <!--Скидка<br>
                    <strong>-<?= $skidka ?>%</strong>-->
                </div>
            </div>
            <div class="container-2">
<center><img alt="icoubtan" src="img/icosert.png"></center>
                <div class="cost clearfix">
                    <span class="old-cost">Обычная цена:<br>
                    <span><?= $price_old?>
                    <small><?= $valuta ?>
                    </small></span></span> <span class="new-cost">Цена со скидкой:<br>
                    <span><?= $price_new ?>
                    <small><?= $valuta ?>
                    </small></span></span>
                </div><a class="button-m" href="#zakaz">&#10143 Заказать</a>
<p style="color:white !important;" class="about"><center style="color: #fff;">Уже куплено убтанов: <b>1 486</b><br>Осталось убтанов по акции: <b>14</b></center></p>
            </div>
        </section>
        <section class="video"> 
            <div class="video-container">
                <iframe allowfullscreen frameborder="0" height="330" src="https://www.youtube.com/embed/i8kv7fMZ9Vk?autohide=1&showinfo=0&rel=0" width="480"></iframe>
            </div>
        </section>
        <section class="block-2">
          <h2 class="title">Про убтан</h2>  
          <p class="about">Убтан Bel’etage - инновационное косметическое средство для быстрого и заметного устранения пятен на лице с лифтинг эффектом с уникальным составом: перемолотых в порошок натуральных продуктов кокоса, нута, кунжута, льна, белой глины, а также экстрактов алое, шиповника и гибискуса. Средство бережно очищает и питает кожу, отшелушившая ее, снабжая витаминами и полезными веществами.</p>
<br> 
<img style="weigth:100%" src="img/ubtan-1.jpg" alt="убтан beletage">
<img src="img/ubtan-2.jpg" alt="убтан beletage">
<img src="img/ubtan-3.jpg" alt="убтан beletage">
      <a class="button-m" href="#zakaz">&#10143 Заказать</a> 
  </section>
        <section class="block-3">
            <h2 class="title">ВЫ НАВСЕГДА ЗАБУДЕТЕ ОБ ЭТИХ ПРОБЛЕМАХ:</h2>
            <ul class="clothes clearfix">
                <li>
                    <img alt="freebra" src="img/adv-1.jpg">
                    <p>Пигментные пятна</p>
                </li>
                <li>
                    <img alt="freebra" src="img/adv-2.jpg">
                    <p>Покраснение кожи</p>
                </li>
                <li>
                    <img alt="freebra" src="img/adv-3.jpg">
                    <p>Тусклость цвета лица</p>
                </li>
                <li>
                    <img alt="freebra" src="img/adv-4.jpg">
                    <p>Морщины</p>
                </li>
            </ul>
            <div class="text">
                Омолодите свою кожу, придадите ей свежий вид, привлечете внимание мужчин и станете объектом зависти подруг и знакомых!
            </div>
        </section>
        <section class="block-4">
            <h2 class="title">Преимущества убтана</h2>
            <ul class="advant clearfix">
                <li>Мягко очищает кожу, оказывает отбеливающий эффект</li>
                <li>Выравнивает рельеф и тон кожи, делает её гладкой и сияющей </li>
                <li>Способствует разглаживанию морщин</li>
                <li>Делает кожу более эластичной</li>
            </ul>
<a class="button-m" href="#zakaz">&#10143 Заказать</a>
<p class="about"><center style="color: #fff;">Осталось убтанов по акции: <b>14</b></center></p>
        </section>

        <section class="block-9">
            <h2 class="title">Как использовать?</h2>
            <ul class="use">
                <li><b>1 -</b> Развести одну чайную ложку без верха убтана водой до образования пастообразной консистенции</li>
                <li><b>2 -</b> Нанести массажными движениями на кожу лица, избегая зоны вокруг глаз</li>
                <li><b>3 -</b> После массирования оставить на 3-5 мин, затем смыть водой</li>
                <li><b>Применять 2-3 раза в неделю (одного убтана хватает на 3,5 месяца)</b></li>
            </ul>
        </section>

        <section><img src="img/doposle.jpg" alt="убтан beletage"></section>

        <section class="block-10">
           <!-- <h2 class="title">Про убтан</h2>-->
            <div class="safe">
                Убтан Bel’etage - лучшее средство для омоложения кожи лица, её питания, поддержания в красивом виде и продления молодости натуральными средствами. Благодаря органическим компонентам и витаминам в своём составе, убтан нормализирует работу сальных желёз и деликатно очищает кожу.
            </div><a class="button-m" href="#zakaz">&#10143 Заказать</a>
        </section>
        <section class="block-6">
            <h2 class="title">Отзывы покупателей</h2>
            <div class="rev-slider clearfix">
                <div class="rev-item">
                    <img alt="отзывы убтан beletage" src="img/rev-1.jpg">
                    <!--<h4>Марина Губская, 28 лет</h4>-->
                    <p>Пользуюсь уже почти 4 месяца на постоянной основе. Очень радует эффект, кожа гладкая, ровная. Выровнялся сам рельеф кожи и цвет (все знакомые замечают и говорят что посветлело лицо и пигментные пятна стали менее заметны).  Уменьшились высыпания. Для меня важно что он не сушит кожу, очень комфортное ощущение после использования.</p>
                </div>
                <div class="rev-item">
                    <img alt="отзывы убтан beletage" src="img/rev-2.jpg">
                    <!--<h4>Виктория Лесникова, 36 лет</h4>-->
                    <p>Очень довольна покупкой. Мне идеально подходит для очищения кожи лица, это такое удовольствие)) Очень приятный запах и состав. Хорошо очищает и не травмирует кожу, а она у меня чувствительная. Ушли воспаления, выровнялся тон, цвет лица меня вообще радует))) и кстати есть ощущение легкого лифтинга. Мне оч нравиться.</p>
                </div>
                <div class="rev-item">
                    <img alt="отзывы убтан beletage" src="img/rev-3.jpg">
                    <!--<h4>Карина Петрова, 22 года</h4>-->
                    <p>Замечательный продукт. Раньше не пользовалась убтаном, решила попробовать. Результат очень даже порадовал! Кожа нежная, выровнялся тон лица, какое-то  более свежее лицо стало. У меня сухая кожа но ощущения очень приятные в использовании, не сушит и не стягивает, наоборот как будто увлажняет. Использую каждый день для умывания и раз в неделю оставляю на 10 минут как маску. Довольна.</p>
                </div>
            </div>
        </section>
        <section><h2 class="title">Одобрено Минздравом</h2>
<img src="img/sertifikat.jpg" alt="убтан beletage"></section>
        <section class="block-5">
            <h2 class="title">Доставка и оплата</h2>
            <ul class="deliv">
                <li>
                    <h4>Оставьте заявку</h4>
                    <p>Воспользуйтесь формой заказа и оставьте ваши контактные данные</p>
                </li>
                <li>
                    <h4>Подтвердите заказ</h4>
                    <p>Наш менеджер свяжется с вами для уточнения деталей заказа и адреса доставки</p>
                </li>
                <li>
                    <h4>Получите товар</h4>
                    <p>Заберите посылку в отделении Новой почты</p>
                </li>
            </ul>
        </section>
        <section class="block-8">
            <div class="title"> 
                ЗАКАЖИТЕ УБТАН СЕГОДНЯ СО СКИДКОЙ 53% &#8595;
            </div>
            <div class="container-1"></div>
            <div class="container-2" id="zakaz">
                <div class="timer">
                    <h4>До конца акции осталось:</h4>
                    <div class="countbox clearfix"></div>
                </div>
                <div class="cost clearfix">
                    <span class="old-cost">Обычная цена:<br>
                    <span><?= $price_old?>
                    <small><?= $valuta ?>
                    </small></span></span> <span class="new-cost">Цена со скидкой:<br>
                    <span><?= $price_new ?>
                    <small><?= $valuta ?>
                    </small></span></span>
                </div>
                <div class="order">
                    <form action="zakaz.php" class="m1-form" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">
                        <div>
                            <input name="name" placeholder="Введите Ф.И.О" required="" type="text">
                        </div>
                        <div>
                            <input name="phone" placeholder="Введите телефон" required="" type="text">
                        </div>
                        <div>
                            <button class="button-m">&#10143 Заказать</button>
                            <p style="color:white !important;" class="about"><center style="color: #fff;">Уже куплено убтанов: <b>1 486</b><br>Осталось убтанов по акции: <b>14</b></center></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="copyright">
            <!--<img alt="copyright" class="mob-vis" src="img/cop1-b-320.png">-->

            <p style="text-align: center">
TM Белетаж, (044) 334 50 86<br>
08200, Украина, Киевская обл., г. Ирпень, ул. Зои Алиевой 66/1<br>
<a href="politics.html" style="color: inherit;" target="_blank">Политика конфиденциальности</a></p>
        </section>
    </div>
    <script src="js/count.js" type="text/javascript">
    </script> 
    <script src="js/slick.min.js" type="text/javascript">
    </script> 
    <script src="js/init.js" type="text/javascript">
    </script>


  </body>
</html>
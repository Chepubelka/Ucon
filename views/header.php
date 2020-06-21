<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Юкон</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/js/jquery-nice-select-1.1.0/css/nice-select.css">
    <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/sunny/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="public/fontawesome-free-5.12.1-web/css/all.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/adaptive.css">
</head>

<body>
    <header class="border-bottom border-primary">
        <div class="container p-3 p-lg-0 w-100">
            <div class="row m-0 justify-content-between">
                <div class="col-auto pb-3 d-flex align-items-end">
                    <img src="/public/img/image.png" alt="" class="img-header">
                </div>
                <div class="col-3 d-flex d-lg-none align-items-right">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" id="btn-nav">
                        <span class="burger-item">Menu</span>
                    </button>
                </div>
                <div class="col p-0 d-none d-lg-flex">
                    <div class="row h-100 justify-content-between align-items-center m-0" id="supnav">
                        <div class="col-auto">
                            <address class="text-white font-weight-bold m-0"><i
                                    class="fas fa-map-marker-alt text-white"></i>
                                г. Ростов-на-Дону, Шаумяна, 73</address>
                            <address class="text-white font-weight-bold m-0 ml-3">г. Волгодонск, ул. Энтузиастов, 13
                            </address>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-phone-alt text-white" aria-hidden="true"></i>
                            <a href="tel:+7 (863) 229-81-82"
                                class="text-decoration-none text-white font-weight-bold ml-2">+7 (863) 229-81-82</a><br>
                            <a href="tel:+7 (8639) 24-79-79"
                                class="text-decoration-none text-white font-weight-bold ml-4 ml-2">+7 (8639)
                                24-79-79</a>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                                <?php 
                                    // session_start();
                                    if (isset($_SESSION['login'])):?>
                                    <p class="text-decoration-none text-white font-weight-bold">Здравствуйте, 
                                        <?php
                                        echo $_SESSION['login'].'</p>';?>
                                        <a href="apanel/logout">Выйти</a>
                                    <?php else:?>
                                <button type="button" class="btn d-none d-lg-block" id="calc-btn">
                                <i class="fas fa-calculator"></i>
                                Калькулятор онлайн
                            </button>
                                    <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
<?php include ROOT.'/views/header.php'; ?>
        <div class="row m-0 d-flex border border-primary" id="navigation">
            <div class="col" id="navbar-scroll">
                <div class="container">
                    <nav class="navbar navbar-light navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto" id="navbar-ul">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Каталог</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Услуги</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Цены</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Конструкции</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Акции</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Наши работы</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="nav-item">Контакты</a>
                                </li>
                                <li class="d-lg-none d-block">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="font-weight-bold" id="nav-item"><i
                                                    class="fas fa-map-marker-alt d-inline" id="nav-item"></i> г.
                                                Ростов-на-Дону, Шаумяна, 73</span>
                                            <a href="#" class="text-decoration-none font-weight-bold ml-5"
                                                id="nav-item">+7 (863) 229-81-82</a>
                                        </div>
                                        <div class="col-auto">
                                            <span class="font-weight-bold" id="nav-item"><i
                                                    class="fa fa-phone-alt d-inline" aria-hidden="true"
                                                    id="nav-item"></i> г. Волгодонск, ул. Энтузиастов, 13</span>
                                            <a href="#" class="font-weight-bold ml-5 text-decoration-none"
                                                id="nav-item">+7 (8639) 24-79-79</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </header>
    <section>
        <div class="container" id="calculator">
                <div class="row d-flex flex-column-reverse flex-lg-row">
                    <div class="col-lg-4 text-white" id="calculator-left">
                        <form action="" id="form" method="post" enctype="multipart/form-data">
                        <div class="form-item d-inline-block mt-5">
                            <h1 class="d-inline" id="h1-form">Итоговая цена:</h1>
                            <h1 class="d-inline-block border-bottom border-primary">
                                <span id="overprice">0</span>руб
                            </h1>
                        </div>
                        <div class="form-group">
                            <div class="form-item">
                                <p class="mb-0">Город доставки:</p>
                                <select class="wide" id="calc-select" name="city">
                                    <option data-display="Выберите город">Ничего</option>
                                    <option>Москва</option>
                                    <option>Санкт-Петербург</option>
                                    <option>Ростов-На-Дону</option>
                                </select>
                                <p class="mb-0">Дата рождения</p>
                                <input id="calendar" readonly="readonly" name="date">
                                <p class="mb-0">Телефон</p>
                                <input type="text" class="form-control" id="phone" placeholder="+7(___) __-__-___"
                                    name="phone" required>
                                <p class="mb-0">Письменная заявка</p>
                                <div class="fileform">
                                    <div id="fileformlabel">

                                    </div>
                                    <div class="selectbutton"></div>
                                    <input type="file" name="upload" id="upload" />
                                </div>
                                <div class="form-item mt-3">
                                    <button type="submit" class="btn btn-light text-uppercase w-100 font-weight-bold"
                                        id="btn-calc" data-toggle="modal" name="send">Оставить
                                        заявку</button>
                                </div>
                                <div class="form-item pt-2">
                                    <div class="row">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox_6" name="checkreq" required>
                                            <label for="checkbox_6" class="checkbox6"></label>
                                        </div>
                                        <span>Я согласен на <a href="#"
                                                class="text-white border-bottom text-decoration-none">обработку
                                                данных</a></span>
                                    </div>
                                    <div class="row ml-1">
                                        <label for="checkreq" class="error validation"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col" id="calculator-right">
                        <form action="" method="post" id="form">
                        <div class="container-fluid p-5">
                            <h1 id="h1-calc"><i class="fas fa-calculator"></i> Калькулятор расчета стоимости</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 d-flex flex-column">
                                <div class="container-fluid p-0" id="calc-right-materials">
                                    <p class="text-uppercase font-weight-bold">Характеристики:</p>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="d-inline-block">Площадь потолка</p>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <input type="text" id="input-calc" name="lengthp" class="input-calc">
                                        </div>
                                        <div class="col-2">кв.м</div>
                                    </div>
                                    <div class="row ml-1">
                                        <label for="input-calc1" class="error text-danger"></label>
                                    </div>
                                    <p>Количество</p>
                                    <ul type="none">
                                        <div class="row mt-3">
                                            <div class="col-7">
                                                <li>светильников:</li>
                                            </div>
                                            <div class="col-auto p-0">
                                                <input type="text" id="input-calc" name="lamp" class="input-calc">
                                            </div>
                                            <div class="col-2">
                                                шт.
                                            </div>
                                        </div>
                                        <div class="row ml-1">
                                            <label for="input-calc2" class="error text-danger"></label>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-7">
                                                <li>люстр:</li>
                                            </div>
                                            <div class="col-auto p-0">
                                                <input type="text" id="input-calc" name="chandelier" class="input-calc">
                                            </div>
                                            <div class="col-2">
                                                шт.
                                            </div>
                                        </div>
                                        <div class="row ml-1">
                                            <label for="input-calc" class="error text-danger"></label>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-7">
                                                <li>труб:</li>
                                            </div>
                                            <div class="col-auto p-0">
                                                <input type="text" id="input-calc" name="pipe" class="input-calc">
                                            </div>
                                            <div class="col-2">
                                                шт.
                                            </div>
                                        </div>
                                        <div class="row ml-1">
                                            <label for="input-calc4" class="error text-danger"></label>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-7">
                                                <li>углов:</li>
                                            </div>
                                            <div class="col-auto p-0">
                                                <input type="text" id="input-calc" name="angle" class="input-calc">
                                            </div>
                                            <div class="col-2">
                                                шт.
                                            </div>
                                        </div>
                                        <div class="row ml-1">
                                            <label for="input-calc5" class="error text-danger"></label>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="col d-flex flex-column">
                                <div class="container-fluid p-0" id="calc-right-materials">
                                    <div class="row d-flex flex-column">
                                        <div class="col">
                                            <p class="text-uppercase font-weight-bold">Фактура:</p>
                                        </div>
                                        <div class="col pt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="">глянцевая</p>
                                                </div>
                                                <div class="col">
                                                    <div class="checkbox">
                                                        <input type="radio" id="radio1" name="facture" checked>
                                                        <label for="radio1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="">матовая</p>
                                                </div>
                                                <div class="col">
                                                    <div class="checkbox">
                                                        <input type="radio" id="radio2" name="facture">
                                                        <label for="radio2"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pt-5">
                                            <p class="text-uppercase font-weight-bold">Цвет:</p>
                                        </div>
                                        <div class="col pt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="">Синий</p>
                                                </div>
                                                <div class="col">
                                                    <div class="checkbox">
                                                        <input type="radio" id="radio3" name="color" checked>
                                                        <label for="radio3"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pt-2">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="">Красный</p>
                                                </div>
                                                <div class="col">
                                                    <div class="checkbox">
                                                        <input type="radio" id="radio4" name="color">
                                                        <label for="radio4"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pt-2 pb-5 pb-lg-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p>Зеленый</p>
                                                </div>
                                                <div class="col">
                                                    <div class="checkbox">
                                                        <input type="radio" id="radio5" name="color">
                                                        <label for="radio5"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </section>
    <?php include ROOT.'/views/footer.php' ?>
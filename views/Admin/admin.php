    <?php include ROOT.'/views/header.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <h1 id="h1-admins">Пользователи</h1>
            <table class="table table-bordered table-sm" id="table-users">
                <thead>
                    <tr>
                        <th id="head-table">Id</th>
                        <th id="head-table">Логин пользователя</th>
                        <th id="head-table">Действие</th>
                    </tr>
                </thead>
                <form action="" method="post">
                <tbody class="tbodyusers">
                    <?php foreach($datausers as $dataitem): ?>
                    <tr>
                        <td><?php echo $dataitem['id'] ?></td>
                        <td><?php echo $dataitem['login'] ?></td>
                        <td class="d-flex justify-content-between">
                            <button type="button" name="<?php echo $dataitem['id'] ?>" id="updateuser" class="form-control border-0"><i class="fas fa-edit"></i></button>
                            <button type="button" name="<?php echo $dataitem['id'] ?>" id="deleteuser" class="form-control border-0"><i class="fas fa-times"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </form>
            </table>
        </div> 
        <div class="row mt-5">
            <form action="" method="post">
                <h3>Добавление нового пользователя</h3>
                <p>Логин:</p>
    <input type="text" class="form-control" id="text-login" placeholder="Логин пользователя" name="login">
    <p>Пароль:</p>
    <input type="password" class="form-control" id="text-login" placeholder="Пароль пользователя" name="password">
    <button type="submit" class="form-control mt-3 mb-3 text-uppercase" id="login-btn" name="addUser">Добавить пользователя</button>
            </form>
        </div>
    <div class="row mt-5">
        <h1 class="w-100" id="h1-admins">Настройки калькулятора</h1>
        <form action="" method="post">
        <div class="row">
            <div class="col">
            <?php foreach($datasettings as $dataitemset): ?>
                <p>Цена за кв.м. потолка:</p>
            <input type="text" class="form-control" id="text-login" name="price_one_m" value="<?php echo $dataitemset['price_one_m'] ?>">
            <p>Цена за светильник:</p>
            <input type="text" class="form-control" id="text-login" name="price_lamp" value="<?php echo $dataitemset['price_lamp'] ?>">
            <p>Цена за угол:</p>
            <input type="text" class="form-control" id="text-login" name="price_angle" value="<?php echo $dataitemset['price_angle'] ?>">
            <p>Варианты цветов:</p>
                <?php $jsondata = json_decode($dataitemset['color']) ?>
                <?php foreach($jsondata as $key => $dataitem): ?>
            <div class="row"><?php echo "<div class='col'>".$dataitem."</div><div class='col'><button type='button' class='form-control border-0' name='".$key."' id='deletecolor'><i class='fas fa-times'></i></button></div>"; ?></div>
            <?php endforeach; ?>
            <a id="addcolor">Добавить новый цвет</a>
            <button type="submit" class="form-control mt-3 mb-3 text-uppercase" id="login-btn" name="updateSettings">Сохранить изменения</button>
            </div>
            <div class="col">
                <p>Цена за глянцевую фактуру:</p>
            <input type="text" class="form-control" id="text-login" name="glossy" value="<?php echo $dataitemset['glossy'] ?>">
            <p>Цена за люстру:</p>
            <input type="text" class="form-control" id="text-login" name="price_chandelier" value="<?php echo $dataitemset['price_chandelier'] ?>">
            </div>
            <div class="col">
                <p>Цена за матовую фактуру:</p>
            <input type="text" class="form-control" id="text-login" name="matte" value="<?php echo $dataitemset['matte']?>">
            <p>Цена за трубу:</p>
            <input type="text" class="form-control" id="text-login" name="price_pipe" value="<?php echo $dataitemset['price_pipe']?>">
            <?php endforeach; ?>
            </div>
            </form>
        </div>
</div>
    <div class="row mt-5">
        <h1 id="h1-admins">Заявки</h1>
        <table class="table table-bordered table-sm" id="table-users">
                <thead>
                    <tr>
                        <th id="head-table">Id</th>
                        <th id="head-table">Телефон</th>
                        <th id="head-table">Дата рождения</th>
                        <th id="head-table">Город доставки</th>
                        <th id="head-table">Текст заявки</th>
                        <th id="head-table">Дата заявки</th>
                        <th id="head-table">IP</th>
                        <th id="head-table">Действие</th>
                    </tr>
                </thead>
                <tbody class="tbodyreq">
                <form action="" method="post">
                <?php foreach($datarequests as $dataitems): ?>
                    <tr>
                        <td><?php echo $dataitems['id'] ?></td>
                        <td><?php echo $dataitems['phone'] ?></td>
                        <td><?php echo $newdate = str_replace('-','.',date_format(date_create($dataitems['birthday']), 'd-m-Y'));?></td>
                        <td><?php echo $dataitems['city'] ?></td>
                        <td><?php echo $dataitems['statement'] ?></td>
                        <td><?php echo str_replace('-','.',date_format(date_create($dataitems['date_statement']), 'd-m-Y')); ?></td>
                        <td><?php echo $dataitems['ip_user'] ?></td>
<!--                        <td><button type="button" name="deletereq[--><?php //echo $dataitems['id'] ?><!--]" id="deletereq" class="form-control border-0"><i class="fas fa-times"></i></button></td>-->
                        <td><button type="button" name="<?php echo $dataitems['id'];?>" id="deletereq" class="form-control border-0"><i class="fas fa-times"></i></button></td>
                    </tr>
                <?php endforeach; ?>
                </form>
                </tbody>
            </table>
    </div>
    </div>
    <?php include ROOT.'/views/footer.php' ?>
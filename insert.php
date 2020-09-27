<?php
    include_once 'process.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Регистрация данных</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/calculator.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="js/track_number_generator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
  
</style>
  

</head>
<body>

  <a href="http://passfy.ru">Назад</a>


<br>
<br>
<br>
    <div class="container"> <!-- Container -->
        <div class="shadow p-3 mb-5 bg-white rounded"><!-- Regular shadow -->
            <h2 class="mt33">Заполните</h2>
            <h5 class="text-center text-success" id="message"><?= $sucess ;?></h5>
            <br>
            <form class="mt33" action="insert.php" method = "post"><!--form -->
            <br>
            
                <h4 class="mt33">Параметры посылки <span class="required"> *</span></h4>
                <br>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Вес</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="(в граммах + упаковка)" min="1" max="20000" onkeypress="this.value=this.value.substring(0,4);" value="" onsubmit="fun11()" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Габариты посылки</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="length_parcel" name="length_parcel" placeholder="Длина в сантиметрах" min="1" max="190" value="" required>
                        <input type="number" class="form-control" id="width_parcel" name="width_parcel" placeholder="Ширина в сантиметрах" min="1" max="130" value="" required>
                        <input type="number" class="form-control" id="height_parcel" name="height_parcel" placeholder="Высота в сантиметрах" min="1" max="350" value="" required>
                    </div>
                </div>

                  <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Объем</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="volume" name="volume" placeholder="" value="" readonly>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit" id="calculate" onclick="valueCalculate()" name="value_calculate" class="btn btn-primary">Рассчитать объем</button>
                    </div>
                </div>
                
                <br>

                <!-- Persnonal Info Sender  -->
                <h4 class="mt33">Данные отправителя <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Телефон отправителя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telfrom" name="telfrom" maxlength="12" placeholder="+7" value="" required>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">ФИО отправителя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="namefrom" name="namefrom" placeholder="" value="" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Город отправителя</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="from_city" name="from_city" placeholder="" required>
                            <option value="Сургут">Сургут</option>
                            <option value="Москва">Москва</option>
                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                            <option value="Новосибирск">Новосибирск</option>
                            <option value="Екатеринбург">Екатеринбург</option>
                            <option value="Казань">Казань</option>
                            <option value="Нижний Новгород">Нижний Новгород</option>
                            <option value="Челябинск">Челябинск</option>
                            <option value="Самара">Самара</option>
                            <option value="Омск">Омск</option>
                            <option value="Ростов-на-Дону">Ростов-на-Дону</option>
                            <option value="Уфа">Уфа</option>
                            <option value="Красноярск">Красноярск</option>
                            <option value="Воронеж">Воронеж</option>
                            <option value="Пермь">Пермь</option>
                            <option value="Волгоград">Волгоград</option>
                            <option value="Краснодар">Краснодар</option>
                            <option value="Саратов">Саратов</option>
                            <option value="Тюмень">Тюмень</option>
                            <option value="Тольятти">Тольятти</option>
                            <option value="Ижевск">Ижевск</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Адрес отправителя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addressfrom" name="addressfrom" placeholder="" value="" required>
                    </div>
                </div>
                <br>

                <h4 class="mt33">Данные получателя <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Телефон получателя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telto" name="telto" maxlength="12" placeholder="+7" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">ФИО получателя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nameto" name="nameto" placeholder="" value="" required>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Город получателя</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="to_city" name="to_city" placeholder="" required>
                            <option value="Сургут">Сургут</option>
                            <option value="Москва">Москва</option>
                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                            <option value="Новосибирск">Новосибирск</option>
                            <option value="Екатеринбург">Екатеринбург</option>
                            <option value="Казань">Казань</option>
                            <option value="Нижний Новгород">Нижний Новгород</option>
                            <option value="Челябинск">Челябинск</option>
                            <option value="Самара">Самара</option>
                            <option value="Омск">Омск</option>
                            <option value="Ростов-на-Дону">Ростов-на-Дону</option>
                            <option value="Уфа">Уфа</option>
                            <option value="Красноярск">Красноярск</option>
                            <option value="Воронеж">Воронеж</option>
                            <option value="Пермь">Пермь</option>
                            <option value="Волгоград">Волгоград</option>
                            <option value="Краснодар">Краснодар</option>
                            <option value="Саратов">Саратов</option>
                            <option value="Тюмень">Тюмень</option>
                            <option value="Тольятти">Тольятти</option>
                            <option value="Ижевск">Ижевск</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Адрес получателя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addressto" name="addressto" placeholder="" value="" required>
                    </div>
                </div>

                <br>

                <h4 class="mt33">Дополнительные параметры <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Способ доставки</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="deliverymethod" name="deliverymethod" placeholder="" value="" required>
                            <option>Обычный (178 руб.)</option>
                            <option>Ускоренный (153 руб.)</option>
                            <option>ESM (323 руб.)</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Тип заказа</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="type_parcel" name="type_parcel" placeholder="" required="">
                            <option value="Бандероль">Бандероль</option>
                            <option value="Письмо">Письмо</option>
                            <option value="Посылка">Посылка</option>
                            <option value="Груз">Груз</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Выбор партнера доставки</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="deliverypartner" name="deliverypartner" placeholder="" required>
                            <option selected value disabled> </option>
                            <option value="Boskberri">Boskberri</option>
                            <option value="EkspresPoni">EkspresPoni</option>
                            <option value="ШДЭК">ШДЭК</option>
                            <option value="PDP">PDP</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Общая стоимость</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="totalcheckout" name="totalcheckout" placeholder="" value="" readonly>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit" id="calculate" onclick="resultOfCalculation()" name="price_calculate" class="btn btn-primary">Рассчитать стоимость</button>
                    </div>
                </div>
                
                <div class="wall4">
				<div class="personal_data_sender">
					<div class="Sender_phone_number">
						<p>Трек-номер</p>
						<input id="input_1" onclick="trackNumberGeneration()" class="trek" onkeyup="" type="text" name="trek" value="" readonly>

                <!-- Show Message -->
                <div class="text-success text-center d-none" id="msg_div">
                    <h4 id="res_message">Ваши данные занесены.</h4>
                </div>

                <!-- btn insert data -->
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit" id="save" onclick="resultOfCalculation()" name="save" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </form><!--end form -->
        </div><!--end container -->
    </div><!-- Regular shadow -->

    <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>
</body>
</html>
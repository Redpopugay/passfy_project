<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Отслеживание посылки</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
            <div class="form-group row">
                <label for="description" class="control-label col-sm-3">Введите трек-номер посылки</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="trek" name="trek" maxlength="16" placeholder="" value="" required>
                    </div>
                    
            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit" id="track_parcel_btn" name="track_parcel" class="btn btn-primary">Отследить</button>
                </div>
            </div>
            </div>
            
            <br>
            
            <h2 class="mt33">Данные о посылке</h2>
            <h5 class="text-center text-success" id="message"><?= $sucess ;?></h5>
            <br>
            <form class="mt33" action="insert.php" method = "post"><!--form -->
            <br>
          
                <h4 class="mt33">Параметры посылки <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Вес</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="(в граммах + упаковка)" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Габариты посылки</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="length_parcel" name="length_parcel" placeholder="Длина в сантиметрах" min="0" readonly>
                        <input type="number" class="form-control" id="width_parcel" name="width_parcel" placeholder="Ширина в сантиметрах" min="0" readonly>
                        <input type="number" class="form-control" id="height_parcel" name="height_parcel" placeholder="Высота в сантиметрах" min="0" readonly>
                    </div>
                </div>

                  <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Объем</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="volume" name="volume" placeholder="" readonly>
                    </div>
                </div>
                
                <br>

                <!-- Persnonal Info Sender  -->
                <h4 class="mt33">Данные отправителя <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Телефон отправителя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telfrom" name="telfrom" maxlength="12" placeholder="+7" readonly>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">ФИО отправителя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="namefrom" name="namefrom" placeholder="" readonly>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Город отправителя</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="from_city" name="from_city" placeholder="" readonly>
                            <option disabled>Сургут</option>
                            <option disabled>Москва</option>
                            <option disabled>Санкт-Петербург</option>
                            <option disabled>Новосибирск</option>
                            <option disabled>Екатеринбург</option>
                            <option disabled>Казань</option>
                            <option disabled>Нижний Новгород</option>
                            <option disabled>Челябинск</option>
                            <option disabled>Самара</option>
                            <option disabled>Омск</option>
                            <option disabled>Ростов-на-Дону</option>
                            <option disabled>Уфа</option>
                            <option disabled>Красноярск</option>
                            <option disabled>Воронеж</option>
                            <option disabled>Пермь</option>
                            <option disabled>Волгоград</option>
                            <option disabled>Краснодар</option>
                            <option disabled>Саратов</option>
                            <option disabled>Тюмень</option>
                            <option disabled>Тольятти</option>
                            <option disabled>Ижевск</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Адрес отправителя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addressfrom" name="addressfrom" placeholder="" readonly>
                    </div>
                </div>
                <br>

                <!-- Persnonal Info Recipient  -->
                <h4 class="mt33">Данные получателя <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Телефон получателя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telto" name="telto" maxlength="12" placeholder="+7" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">ФИО получателя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nameto" name="nameto" placeholder="" readonly>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Город отправителя</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="to_city" name="to_city" placeholder="" readonly>
                            <option disabled>Сургут</option>
                            <option disabled>Москва</option>
                            <option disabled>Санкт-Петербург</option>
                            <option disabled>Новосибирск</option>
                            <option disabled>Екатеринбург</option>
                            <option disabled>Казань</option>
                            <option disabled>Нижний Новгород</option>
                            <option disabled>Челябинск</option>
                            <option disabled>Самара</option>
                            <option disabled>Омск</option>
                            <option disabled>Ростов-на-Дону</option>
                            <option disabled>Уфа</option>
                            <option disabled>Красноярск</option>
                            <option disabled>Воронеж</option>
                            <option disabled>Пермь</option>
                            <option disabled>Волгоград</option>
                            <option disabled>Краснодар</option>
                            <option disabled>Саратов</option>
                            <option disabled>Тюмень</option>
                            <option disabled>Тольятти</option>
                            <option disabled>Ижевск</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Адрес получателя</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addressto" name="addressto" placeholder="" readonly>
                    </div>
                </div>
                <br>

                <!-- Persnonal Info Parcel  -->
                <h4 class="mt33">Дополнительные параметры <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Способ доставки</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="deliverymethod" name="deliverymethod" placeholder="" readonly>
                            <option disabled>Обычный (178 руб.)</option>
                            <option disabled>Ускоренный (153 руб.)</option>
                            <option disabled>EMS (323 руб.)</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Тип заказа</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="type_parcel" name="type_parcel" placeholder="" readonly>
                            <option disabled>Бандероль</option>
                            <option disabled>Письмо</option>
                            <option disabled>Посылка</option>
                            <option disabled>Груз</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Выбор партнера доставки</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="deliverypartner" name="deliverypartner" placeholder="" readonly>
                            <option selected value disabled> </option>
                            <option disabled>Boxberry</option>
                            <option disabled>PonyExpress</option>
                            <option disabled>СДЭК</option>
                            <option disabled>DPD</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Общая стоимость</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="totalcheckout" name="totalcheckout" placeholder="" readonly>
                    </div>
                </div>
                

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
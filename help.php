<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Помощь</title>
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
            <h2 class="mt33">Форма обращения в техническую поддержку</h2>
            <h5 class="text-center text-success" id="message"><?= $sucess ;?></h5>
            <br>
            <br>
            <form class="mt33" action="insert.php" method = "post"><!--form -->
          
                <h4 class="mt33">Данные сотрудника <span class="required"> *</span></h4>
                <br>
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">ФИО</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="personal_info_employee" name="personal_info_employee" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Номер отдела</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="department_number" name="department_number" placeholder="" required>
                            <option>Отдел 1</option>
                            <option>Отдел 2</option>
                            <option>Отдел 3</option>
                            <option>Отдел 4</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">E-mail</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email_employee" name="email_employee" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Описание проблемы</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="description_problem" name="description_problem" rows="10" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Скриншот проблемы</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="screenshot_problem" name="screenshot_problem" required>
                    </div>
                </div>
                
                <br>
                
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit" id="send_appeal" name="send_appeal" class="btn btn-primary">Отправить</button>
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
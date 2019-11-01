<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css"/>
<?php
$login = $_POST['login'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">

            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Выберите язык</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <form class="form-horizontal" method="POST" action="validatelanguage.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Какой язык Вы хотите выбрать для пользователя <?php echo $login?>?</label>
                                <select name="list1" required>
                                    <option>Русский</option>
                                    <option>Украинский</option>
                                    <option>Английский</option>
                                    <option>Итальянский</option>
                                </select></p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Выбрать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="logo">
    <img src="/media/img/logo.png" alt="" />
</div>
<div id="loginbox">            
    <form id="loginform" class="form-vertical" action="auth" method="post" />
        <? if(isset($errors)): ?>
            <? foreach ($errors as $error):?>
                <div class="alert">
                    <button class="close" data-dismiss="alert">×</button>
                    <?=$error?>
                </div>
            <? endforeach?>
        <? endif ?>
        <p>Введите логин и пароль.</p>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span><input type="text" name="login" placeholder="Логин" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Пароль" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link" id="to-recover">Забыл пароль?</a></span>
            <span class="pull-right"><input type="submit" name="submit" class="btn btn-inverse" value="Вход" /></span>
        </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical" method="post" />
        <p>Введите свой адрес электронной почты ниже, и мы вышлем Вам инструкции, как восстановить пароль.</p>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; Вернуться на страницу входа</a></span>
            <span class="pull-right"><input type="submit" class="btn btn-inverse" value="Восстановить" /></span>
        </div>
    </form>
</div>
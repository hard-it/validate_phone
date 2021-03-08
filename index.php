<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</head>
<style>
    label {
        display: block;
        margin: 10px 0;
    }
    .error
    {
        color: red;
    }
</style>
<body>
<form>
    <label>
        <input type="text" class="js-phone" name="ph" placeholder="Номер телефона" data-rule-required="true" data-rule-minlength="10" data-msg="Введите номер телефона">
    </label>
    <input type="submit" value="Отправить">
</form>
<script>
    jQuery.validator.addMethod("checkMask", function(value, element) {
        return /\+\d{1}\(\d{3}\)\d{3}-\d{4}/g.test(value);
    });
    $('form').validate();
    $.validator.addClassRules({
        'js-phone': {
            checkMask: true
        }
    });
    $('.js-phone').mask("+7(999)999-9999", {autoclear: false});
</script>
</body>
</html>
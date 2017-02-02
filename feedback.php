<!DOCTYPE html>
<html>
<head>
    <?php
    $title ="Обратная связь";
    require_once "blocks/head.php";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#done").click (function () {
                $('#messageShow').hide();
                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                var fail ="";
                if (name.length <3) fail = "Имя не менее 3 символов";
                else if(email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                    fail = "Некорректный Email";
                else if(subject.length <5)
                    fail = "Тема не менее 5 символов";
                else if(message.length <20)
                    fail = "Сообщение не менее 20 символов";
                if (fail !=""){
                $('#messageShow').html (fail + "<div class='clear'><br></div>");
                $('#messageShow').show();
                return false;}
                $.ajax({
                    type: "POST",
                    url:"mail.php"

                }).done(function() {
                    alert("сообщение принято, ожидайте");
                });

            });
        });
    </script>

</head>

<body>
<div id="page_align" >
    <?php
    require_once "blocks/header.php";
    ?>

    <div id="img">
        <img src="символ.jpg" alt="" class="img" width=50px >
        <h1>Обратная связь</h1>
    </div>

    <div id="feedback">
        <input type="text" placeholder="Имя" id="name" name="name">
        <input type="text" placeholder="Email" id="email" name="email">
        <input type="text" placeholder="Тема" id="subject" name="subject">
       <textarea name="message" id="message" placeholder="Введите текст"></textarea>
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" value="Отправить">


    </div>


    <?php  require_once "blocks/footer.php"?>
</div>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <?php
    $title ="JQuery";
    require_once "blocks/head.php";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>

    </script>

</head>

<body>
<div id="page_align" >
    <?php
    require_once "blocks/header.php";
    ?>
    <div id="img">
    <img src="символ.jpg" alt="" class="img" width=50px >
    <h1>JQuery</h1></br>

        <div id="test1" onclick="$('#test1').hide()"> test1 </div></br>
        <div id="test2" onclick="$('#test1').show()"> test2 </div></br>

        <div class="test"> test 1 </div>
        <div class="test"> test 2 </div>
        <p class="test"> test 3 </p>

        <script type="text/javascript">
            var str = "                                              1 2 3";
           // alert(str);
            //alert($.trim(str));

            var test = $('div.test');
            for (var i = 0; i < test.length; i++)
            {
                  test.get(i).style.color = "red";

            }
            setTimeout("$('p.test').get(0).style.color = 'green'",2000);
        </script>






    <?php  require_once "blocks/footer.php"?>
</div>


</body>
</html>
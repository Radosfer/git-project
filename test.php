<!DOCTYPE html>
<html>
<head>
    <?php
    $title ="Тест";
    require_once "blocks/head.php";
    ?>
</head>

<body>
<div id="page_align" >
    <?php
    require_once "blocks/header.php";
    ?>

    <div id="img">

        <img src="символ.jpg" alt="" class="img" width=50px >
        <h1>Тест</h1>
        <p align="justify"><b>тест</b> 123.</br> </p>

    <?php

        $connection = mysql_connect("localhost", "root", "");
        $bd = mysql_select_db("my_bd");
        //mysql_set_charset("utf8");
        mysql_query("SET NAMES 'utf8' ");

//        if(!$connection || !$bd) {
//            exit(mysql_error());
//            //phpinfo();
//        }
//        else echo "Соединение с БД ОК";

    $result = mysql_query("SELECT * FROM news");
    mysql_close();

    //$row = mysql_fetch_array($result); // пеерменная-массив с данными таблицы news
 while($row = mysql_fetch_array($result))
 {
     echo '<img src="$row[5]">';
     ?>
     <h1><?php echo $row['title']?></h1>

     <p><?php echo $row['text']?></p>
     <p>Дата<?php echo $row['date']?> / <?php echo $row['time']?></p>
     <p>Автор<?php echo $row['autor']?></p>
     <hr />

 <?php }
    ?>


    </div>




    <form method="POST" action="index.html">
        <input type="text" name="name">
        <button>Text</button>
    </form> </br>

    <?php  require_once "blocks/footer.php"?>
</div>


</body>
</html>
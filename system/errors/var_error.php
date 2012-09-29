<div style="border:1px solid #990000; margin:0 0 10px 0; background: white;">
    <style>
        h4{
            padding: 10px;
            color: white;
            background: #990000;
            margin-bottom: 20px;
        }
        p{
            padding: 0px 0 0 10px;
        }
    </style>
<h4>A PHP Error was encountered</h4>
<p>Тип ошибки: <?php echo $info; ?></p>
<p>Сообщение:  <?php echo $message; ?></p>
<p>Имя файла: <?php echo $file; ?></p>
<p>Номер линии: <?php echo $line; ?></p>

</div>
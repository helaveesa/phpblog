﻿<?php
	include("connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" /> 
<title>Blog on PHP</title>
</head>

<body>
	<div class="wrapper">
    
    	<div class="header">
        	<a href="index.php"><img id="logo" src="img/logoblog.jpg" /></a>
        </div>
        
        <div class="content">
        
            <div class="left">
                <?php
				if(!isset($_GET["id"])) {
					$id = 1;	
				} else {
					$id = $_GET["id"];	
				}
					$result = mysql_query("SELECT * FROM data WHERE id='$id'") or die(mysql_error());
					$data = mysql_fetch_array($result);
					do {
						printf('
							<div>
								<h1>%s</h1>
								<p>%s</p>
								<img src="img/%s" alt="teddy"/>
							</div>
						
						', $data['title'], $data['desc'], $data['image']);
					}
					while ($data = mysql_fetch_array($result));
				?>
            </div>
        
            <div class="right">
            
                <div class="right_menu">
                <a href="#">На главную</a>
                <a href="allart.php">Статьи</a>
                <a href="video.php">Видео</a>
                <a href="gallery.php">Фотографии</a>
                <a href="arh.php">Архив</a>
                <a href="contacts.php">Обратная связь</a>
                </div>
                
            </div>
        
        	<div style="clear:both;"></div>
      </div>
        
        <div class="footer">
        	helaveesa.nolder@gmail.com (c) | Blog on PHP 2013
        </div>
    </div>
</body>
</html>
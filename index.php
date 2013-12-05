<?php
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
					$result = mysql_query("SELECT * FROM data") or die(mysql_error());
					$data = mysql_fetch_array($result);
					do {
						printf('
						<div class="article">
							<img src="img/girl.jpg" />
							<a class="title" href="#"><h3>%s</h3></a>
							<p>%s <a href="view.php?id=%s">показать полностью>>> </a></p>
							<div style="clear:both;"></div>
						</div>
						',$data["title"],$data["m_desc"], $data["id"]);
					}
					while ($data = mysql_fetch_array($result));
				?>
            </div>
        
            <div class="right">
            
                <div class="right_menu">
                <a href="#">Главная</a>
                <a href="#">Статьи</a>
                <a href="#">Видео</a>
                <a href="#">Фотографии</a>
                <a href="#">Архив</a>
                <a href="#">Обратная связь</a>
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
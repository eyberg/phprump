<?php 
date_default_timezone_set('UTC');
?>
<html>
<body style="font-size: 14pt;">
Hello, <?php echo $_SERVER['REMOTE_ADDR']; ?>
<p>
It is now <?php echo date(DATE_RFC2822); ?>
<p>
Served to you by
<img src="htts://deferpanic/img/logo.svg"/>

<p>
Try <a href="phpinfo.php">phpinfo()</a>.
</body>
</html>

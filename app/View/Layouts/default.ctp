<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset();?>
<title>
<?php echo $cakeDescription ?>:
<?php echo $title_for_layout;?>
</title>
<?php
echo $this->Html->meta('icon');
echo $this->Html->css('cake.generic');
echo $scripts_for_layout;
?>
</head>
<body>
<div id="container">
<div id="header">
<h1>CakePHP 2.0 Sample</h1>
</div>
<div id="content">
<?php echo $this->Session->flash();?>
<?php echo $content_for_layout;?>
</div>
<div id="footer">
Powerd by CakePHP
</div>
</div>
<?php echo $this->element('sql_dump');?>


<!doctype html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->_vars['title']; ?></title>
</head>
<body>
我是index.tpl123xxxxxxxxx
<?php echo $this->_vars['name']; ?>，这是解析出来的，必须经过Parser.class.php<?php echo $this->_vars['age']; ?>


<hr>

<?php if ($this->_vars['gender']) { ?>
    <h1>hello world!</h1>
<?php } ?>

</body>
</html>
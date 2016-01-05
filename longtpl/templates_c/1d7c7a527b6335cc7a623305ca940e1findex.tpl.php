<!doctype html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->_vars['title']; ?></title>
</head>
<body>
2
<?php include 'test.php'; ?>

我是index.tpl123xxxxxxxxx12313212312
<?php echo $this->_vars['name']; ?>，这是解析出来的，必须经过Parser.class.php<?php echo $this->_vars['age']; ?>


<hr>
<?php /*1111111111111111111112221133121212111111111111111111*/ ?>
<hr>

<?php if ($this->_vars['gender']) { ?>
    <h1>hello world!</h1>
<?php } else { ?>
    <h1>fuck world!!!</h1>
<?php } ?>

qq212222231
<hr>

<?php foreach($this->_vars['arr'] as $key=>$value): ?>
    <?php echo $key; ?>...<?php echo $value; ?>
    <br>
    <?php foreach($this->_vars['arr'] as $key=>$value): ?>
        ........<?php echo $key; ?>...<?php echo $value; ?>
        <br>
    <?php endforeach; ?>
<?php endforeach; ?>

</body>
</html>
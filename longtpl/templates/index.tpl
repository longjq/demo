<!doctype html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>{$title}</title>
</head>
<body>
2
{include file="test.php"}

我是index.tpl123xxxxxxxxx12313212312
{$name}，这是解析出来的，必须经过Parser.class.php{$age}


<hr>
{#}1111111111111111111112221133121212111111111111111111{#}
<hr>

{if $gender}
    <h1>hello world!</h1>
{else}
    <h1>fuck world!!!</h1>
{/if}

qq212222231
<hr>

{foreach $arr(key,value)}
    {@key}...{@value}
    <br>
    {foreach $arr(key,value)}
        ........{@key}...{@value}
        <br>
    {/foreach}
{/foreach}

</body>
</html>
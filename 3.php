<html>
<body>
    <form action="" method="POST">
<input id="text" type="text" name="text" maxlength="100">
<input id="but" type="submit" name="submit" value="Преобразовать">
</form>
<?php
/*сделал без асинхронного программирования, просто самым простым способом*/
if(isset($_POST["submit"])){
    $text= $_POST["text"];
    echo "<div>".replaced(lowCase($text))."</div>";
}
function lowCase($str){
    return mb_strtolower($str);
}
function replaced($str){
    return str_replace(" ", "%20", $str);
}
?>
</body>
</html>

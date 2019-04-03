<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<?php
$str = "Jane & 'Tarzan'";
echo htmlspecialchars($str, ENT_COMPAT);
echo "<br>";
echo htmlspecialchars($str, ENT_QUOTES);
echo "<br>";
echo htmlspecialchars($str, ENT_NOQUOTES);
?>
</body>
</html>
<html>
<body>
<form action = "gcd.php" method = "get">
GCD of two numbers<br>
1st number: <br>
<input name = "num1"><br>
2nd number: <br>
<input name = "num2"><br>
<button type = "submit" =">Submit</button><br><br>

<?php

if(isset($_GETp['num1']) || isset($_GET['num2'])){
    $a = $_GET ['num1'];
    $b = $_GET ['num2'];
    echo "GCD of $a and $b = ", gcd($a, $b);
}

function gcd($a, $b)

{
    if($b == 0)
        return $a;
    return gcd($b, $a % $b);    
}

?>

</form>
</body>
</html>
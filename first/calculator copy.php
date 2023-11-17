<html>

<body>

<form action = "calculator.php" method = "post"> 

<input type = "text" name = "number1">


<select name = "op">
    <option value = "Mul">Mul</option>
    <option value = "Div">Div</option>
    <option value = "Add">Add</option>
    <option value = "Sub">Sub</option>



</select>

<input type = "text" name = "number2"> <br>

<input type = "submit" value = "Calculate">

</form>

<?php

    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $result = $number1 * $number2;

    echo $result;

?>

</body>
</html>
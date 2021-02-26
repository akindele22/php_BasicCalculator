<!Doctype html>
<html>
<head>
<body>

<h3> Basic calculator </h3>

<p> The answer is:

<?php 
// collect user input
$input1 = $_POST['num1'];
$input2 = $_POST['num2'];
$operator = $_POST['operator'];


    if($_POST['operator'] == 'add'){
        $total = $input1 + $input2;
        echo "{$input1} {$operator} {$input2} equals {$total}";
    }
    else if($_POST['operator'] == 'subtract'){
        $total = $input1 - $input2;
        echo "{$input1} {$operator} {$input2} equals {$total}";
    }
    else if($_POST['operator'] == 'multiply'){
        $total = $input1 * $input2;
        echo "{$input1} {$operator} {$input2} equals {$total}";
    }
    else if($_POST['operator'] == 'divide'){
        $total = $input1 / $input2;
        echo "{$input1} {$operator} {$input2} equals {$total}";
    }
?>
<form method="post" action="Operators.php">
    <input type="text" name="num1">
    
    <select name="operator">
        <option value="add"> Add </option>
        <option value="subtract"> Subtract </option>
        <option value="multiply"> Multiply </option>
        <option value="divide"> Divide </option>
    </select>
    <input type="text" name="num2">
    <button type="submit" name="submit" value="Calculate"> Calculate </button>
</form>
</p>
</body>
</head>
</html>

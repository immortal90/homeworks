<?php
function clearData($data, $type='i'){
    switch ($type){
        case 'i': return $data*1; break;
        case 's': return trim(strip_tags($data));break;
    }
}
$output = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $a = clearData($_POST['number1']);
    $b = clearData($_POST['number2']);
    $operator = clearData($_POST['operator'], 's');
    $output =" $a $operator $b = ";
    switch($operator){
        case '+': $output .= $a + $b; break;
        case '-': $output .= $a - $b; break;
        case '*': $output .= $a * $b; break;
        case '%': $output .= $a % $b; break;
        case '/':
            if($b == 0)
                $output = "Ділити на нуль не можна";
            else
                $output .= $a / $b;
            break;
    }
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Число 1 </br>
<input type="text" name="number1"></br>
Оператор:</br>
<select name="operator">
    <option value="+">+<option value="-">-<option value="*">*<option value="/">/<option value="%">%
</select> </br>
Число2</br>
<input type="text" name="number2"></br>
<input type ="submit" value="Рахувати">
</form>
<?php
if($output){
    echo $output;
}
?>

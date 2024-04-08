<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Basic Calculator</h1>
        <form action="" name="clc" class="container">
            <input type="text" name="display" ><br>
            <input class="btn" type="button" value="1" onclick="clc.display.value += '1'">
            <input class="btn" type="button" value="2" onclick="clc.display.value += '2'">
            <input class="btn" type="button" value="3" onclick="clc.display.value += '3'">
            <input class="btns" type="button" value="+" onclick="clc.display.value += '+'"><br>
            <input class="btn" type="button" value="4" onclick="clc.display.value += '4'">
            <input class="btn" type="button" value="5" onclick="clc.display.value += '5'">
            <input class="btn" type="button" value="6" onclick="clc.display.value += '6'">
            <input class="btns" type="button" value="-" onclick="clc.display.value += '-'" ><br>
            <input class="btn" type="button" value="7" onclick="clc.display.value += '7'">
            <input class="btn" type="button" value="8" onclick="clc.display.value += '8'">
            <input class="btn" type="button" value="9" onclick="clc.display.value += '9'">
            <input class="btns" type="button" value="*" onclick="clc.display.value += '*'" ><br>
            <input class="btnc" type="button" value="AC" onclick="clc.display.value =''">  
            <input class="btn" type="button" value="0" onclick="clc.display.value += '0'">
            <input class="btnc" type="button" value="C" onclick="display.value = display.value.toString().slice(0,-1)"> 
            <input class="btns" type="button" value="&#247;" onclick="clc.display.value += '/'"><br>
            <input class="btn" type="button" value="." onclick="clc.display.value += '.'"> 
            <input class="eql" type="button" value="=" onclick="clc.display.value =eval(clc.display.value)">  
        </form>
    </div>
</body>
</html>
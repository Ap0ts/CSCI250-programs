<html>

<h1>Calculator in Javascript Demo </h1>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js"></script>


<form name= "form1">
<input id="calc" type="text" name="answer"><br><br>

<input type="button" onclick="form1.answer.value +=  '1'" value = "1">
<input type="button" onclick="form1.answer.value +=  '2'" value = "2">
<input type="button" onclick="form1.answer.value +=  '3'" value = "3">
<input type="button" onclick="form1.answer.value +=  '*'" value = "*">
<br><br>

<input type="button" onclick="form1.answer.value +=  '4'" value = "4">
<input type="button" onclick="form1.answer.value +=  '5'" value = "5">
<input type="button" onclick="form1.answer.value +=  '6'" value = "6">
<input type="button" onclick="form1.answer.value +=  '/'" value = "/">
<br><br>

<input type="button" onclick="form1.answer.value +=  '7'" value = "7">
<input type="button" onclick="form1.answer.value +=  '8'" value = "8">
<input type="button" onclick="form1.answer.value +=  '9'" value = "9">
<input type="button" onclick="form1.answer.value +=  '+'" value = "+">
<br><br>

<input type="button" onclick="form1.answer.value +=  '0'" value = "0">
<input type="button" onclick="form1.answer.value +=  '-'" value = "-">
<input type="button" onclick="form1.answer.value +=  '.'" value = ".">

<br><br>

<input type="button" onclick="form1.answer.value = ''" value= "clear">
<input type="button" onclick="form1.answer.value = math.evaluate(form1.answer.value)" value = "=">



</html>
<html>

<body>

<h2>Voting Machine Example for the Animal Presidents</h2>

<form action = "recording_vote1.php" method = "post" >

<p>
Enter your SSN: <br>

<input type = "text" name = "ssn" size = "15" /> <br>

    <label for="state">Select your state:</label> 
    <select name="state" id="state">
        <option value = "">Choose:</option>
        <option value = "nj">New Jersey</option>
        <option value = "ny">New York</option>
        <option value = "tx">Texas</option>

    </select> <br>

</p>

<p><input type = "submit" value = "submit vote" /></p>

<input type = "radio" name = "vote" value = "Donald Duck" /><label>Donald Duck</label> <br>
<input type = "radio" name = "vote" value = "Mikey Mouse" /><label>Mikey Mouse</label> <br>
<input type = "radio" name = "vote" value = "Tweeky Bird" /><label>Tweeky Bird</label> <br>

</form>



</body>


</html>


 
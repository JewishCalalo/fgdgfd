<form method="POST" action="Part1.php">
Product ID: <input type="text"
 name="product_id" required>
<br />
<br />
Category:
<select name="category" required>
<option value="Ovenmitt">Pot Holder</option>
<option value="FryingPan">Frying Pan</option>
<option value="Torch">Kitchen Torch</option>
</select>
<br />
<br />
Number of Items: <input type ="text" name="number_of_items" required>
<br />
<br />
Customer Name: <input type = "text" 
name="customer_name" required>
<br />
<br />
<input type="submit" name="submit">
</form>
<h4>Here are the submitted values:</h4>
Product_ID : <strong>
    <?php print $_POST['product_id'] ?? '' ?>
</strong>
<br/>
Category : <strong>
    <?php print $_POST['category'] ?? '' ?>
</strong>
<br />
Number of Items : <strong>
    <?php print $_POST['number_of_items'] ?? ''?>
</strong>
<br />
Customer Name : <strong>
    <?php print $_POST['customer_name'] ?? ''?>
</strong>
<br />
<br />

<h4>This is a collection of the 
    collected Data from our Users.</h4>
<?php
foreach($_POST as $key => $value){
    print"$key and $value";
    print "<br />";
}
?>
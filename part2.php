<form method = "POST" action="Part2.php">
    <select name="lunch[]" multiple>
    <option value="pork">
        BBQ Pork Bun</option>
    <option value="chicken">
        Chicken Bun</option>
    <option value="lotus">
        Lotus Seed Bun</option>
    <option value="bean">
        Bean Paste Bun</option>
    <option value="nest">
        Bird-Nest Bun</option>
    </select>

    <input type ="submit" name ="submit">
</form>
Selected buns:
<br />
<?php
if(isset($_POST['lunch'])){
    foreach ($_POST['lunch'] as $choice){
    print "You want a <strong>$choice</strong> bun. <br />";
    }
    print "<br />";
    print "That is actually a pretty cool choice!";
}
?>
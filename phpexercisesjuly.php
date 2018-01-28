<?php
function julyCheck ($input) {
     if ($input == 'july' || $input == 'July') {
        print "It's July, so it can get really hot.";
     } else {
        print "It’s not July, so at least we’re not in the peak of the heat.";
        }
}

if (!empty($_POST)):
   julyCheck(htmlspecialchars($_POST["name"]));
else:
?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        Month: <input type="text" name="name"><br>
        <input type="submit">
    </form>
<?php endif; ?>

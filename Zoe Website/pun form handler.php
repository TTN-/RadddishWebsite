<html>
<body>

Welcome <?php echo $_POST["Q1"]; ?><br>

</body>
</html>



<html>
<body>

<!-- Counts up the number of correct answers and assigns to 'correct'
<?php
$correct = 0;
echo "got to this point"
echo $correct;
if ($_POST["Q1"] == "right") {
    $correct = $correct + 1	
	echo "I'm in the loop promise"
	
?>


Your score is <?php echo $correct; ?><br>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php 
$title = "Exercise 1";
include 'header.php'; ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting started with PHP -Janika</title>
</head>
<body>
<div class="article"> 
<h2>3.1 Write PHP code to output the following message:
Hello world! My name is "David"</h2>

<?php
    echo "Hello world! My name is \"David\"";
?>
<h2>3.2 Create a PHP variable named $title and assign it the value "PHP is interesting." Then, use this variable as the content within an (heading 4) element.</h2>
<?php
    $title = "PHP is interesting.";
    echo "<h4>$title</h4>";
?>
<h2>3.3 Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades of three students in the course. To display this information, create an HTML table within your PHP code. The table should be structured with columns for Serial Number (S.n.), Name, and Grade, and it should look like this:</h2>
<?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;

    echo "";
?>
<table>
    <tr><th>S.n</th> <th>Name</th> <th>Grade</th></tr>
    <tr><td>1</td> <td>John</td> <td><?php echo $g1 ?></td> </tr>
    <tr><td>2</td> <td>Alice</td> <td><?php echo $g2 ?></td> </tr>
    <tr><td>3</td> <td>Bob</td> <td><?php echo $g3 ?></td> </tr>
</table>
<h2>3.4 Take a screenshot that confirms your development environment setup and include it as an image in the "ex1.php" file.</h2>
<img src="images/dockerss.png" alt="web development environment">

</div>
</body>
<?php include 'footer.php'; ?>
</html>
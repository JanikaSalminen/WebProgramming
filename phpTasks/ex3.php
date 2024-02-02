
<?php 
$title = "Exercise 3";
include 'header.php'; ?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy/DXWfEp4M+0nLFwFFpl+eG/hRTt8+pZl" crossorigin="anonymous">
</head>

<body>
<div class="container"> 

    <div class="article"> 
        <h2>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. Table & Form Guide</h2>
        <div class="bootstrap-form mt-3">
        <form method="post" action="process.php">
                <div class="bs">
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" name="nimi" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="sukunimi" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    

            <br>

    

        <h2>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet</h2>
    

        <table class="table">
            <tr class="table-main">
                <th>1</th>
                <td>&nbsp;Hamk&nbsp;</td>
                <td>&nbsp;CA&nbsp;</td>
                <td>class23</td>
            </tr>

            <tr class="table-main">
                <th>2</th>
                <td>&nbsp;KAMK&nbsp;</td>
                <td>&nbsp;CE&nbsp;</td>
                <td>class19</td>
            </tr>

            <tr class="table-main">
                <th>3</th>
                <td>&nbsp;YAMK&nbsp;</td>
                <td>&nbsp;SS&nbsp;</td>
                <td>class13</td>
            </tr>

        </table>


        <br>

        <h2>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h2>

        <?php
        $str1="Hello";
        $str2="World";

        $joinedStrings = $str1 . ' ' . $str2;
        echo "Sentence: $joinedStrings <br>";
        $lenght =strlen($joinedStrings);
        echo "$lenght";
        ?>

        <br><br>

        <h2>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h2>
        <?php
        $num1=298;
        $num2=234;
        $num3=46;

        $sum=$num1 + $num2 + $num3;
        echo "Sum: $sum";
        ?>

        <br><br>

        <h2>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER). Predefined Variables</h2>
        <?php  
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            echo "Currently using: $user_agent";
        ?>
    </div>
</div>
</body>

    <style>
        h2{
            font-weight: bold;
        }
    </style>
<?php include 'footer.php'; ?>

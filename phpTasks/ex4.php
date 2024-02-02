<?php 
$title = "Exercise 4";
include 'header.php'; ?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy/DXWfEp4M+0nLFwFFpl+eG/hRTt8+pZl" crossorigin="anonymous">
</head>


<body>
<div class="container">

    <div class="article">
        <h2>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h2>
        
        <div class="bootstrap-form mt-3 text-center">
            <form method="post">
                    <div class="bs">
                        <label for="nimi">Firstname:</label>
                        <input type="text" class="form-control" id="nimi" name="nimi" required>
                    </div>
                    <div class="form-group">
                        <label for="ika">Age:</label>
                        <input type="number" class="form-control" id="ika" name="ika" required>
                    </div>
                    <button type="submitVoting">Submit</button>
            </form>
            
        

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                // user input
                $nimi = $_POST["nimi"];
                $ika = intval($_POST["ika"]);

                //if you are over 18
                if ($ika >= 18){
                    $vastaus ="You are eligible for voting $nimi";
                }   else{
                    $vastaus ="Unfortunatelly you are not eligible for voting $nimi";
                }
                echo "<p>$vastaus</p>";
            }
            ?>

            
        </div>

        <br>
        <h2>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h2>
            <?php
            $currentMonth = date("F");

            if ($currentMonth == "August"){
                echo "It's August, so it's still holiday.";
            } else {
                echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
            }
            ?>
        <br>

        <h2>4.4For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h2>

        <form method="post" action="">
            Enter a number: <input type="number" name="numFor" id="numFor">
            <button type="submitMonth">Submit</button>
        </form>

        <?php
        $num = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = isset($_POST["numFor"]) ? $_POST["numFor"] : 0;
        }

        for ($i = 1; $i <= 10; $i++) { 
            echo ("<p>" . "$num" . " X " . "$i" . " = " . $num * $i . "</p>"); 
        }
        ?>
        <br>

        <h2>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h2>

        <form method="post" action="">
            Enter a number: <input type="number" name="numCount" id="numCount">
            <button type="submit">Submit</button>
        </form>

        <?php
        $numCount = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numCount = isset($_POST["numCount"]) ? $_POST["numCount"] : 0;
        }

        $i = 1;
        while ($i <= $numCount) { 
            echo $i . "<br>"; 
            $i++;
        } 
        ?>
        <br>

        <h2>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array.<h2>
        <?php
        $array1 = array("Kossi", "Basil", "Miisu", "Kani");

        foreach($array1 as $result) {
            echo $result . '<br>';
        }

        ?>
    </div>
    </div>
</div>
</body>

<?php include 'footer.php'; ?>
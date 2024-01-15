 <?php
    if (isset($_POST["submit"])) {
        $num = $_POST["num"];
        $temp = $_POST["units"];

        if ($temp == "cel") {
            $result = $num * 9 / 5 + 32;
            echo "The Conversion Value of Cel in Fahrenheit is " . $result;
        } else {
            $result = ($num - 32) * 5 / 9;
            echo "The Conversion Value of Fahrenheit in Celsius is " . $result;
        }
    }
?>

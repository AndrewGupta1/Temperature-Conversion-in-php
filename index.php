<!DOCTYPE html>
<html lang="en">
<head>
    <title>Temperature Conversion in php</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="temperature.css">
</head>
<body>
  <header>
    <h1>Temperature Conversion</h1>
    <div class="main-div">
      <div class="left-side">
        <img src="image/3d.jpg">
      </div>

      <div class="right-side">
        <form method="post">
          <input type="text" name="num" placeholder="enter your number" class="input1">
          <div class="selection">
            <label>Celc</label>
            <input type="radio" name="units" value="cel">

            <label>faren</label>
            <input type="radio" name="units" value="faren">

          </div>
          <input type="submit" name="submit" value="convert now" class="btn">
         </form>
        <div>
          <p>

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

          </p>
        </div>

      </div>

    </div>
  </header>
  
</body>
</html>
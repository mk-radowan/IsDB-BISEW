<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find out maximum number</title>

</head>

<body>

    <h2>Find the maximum number among three numbers</h2>

    <form method="POST" action="">
        <label>Input 1st number:</label><br>
        <input type="number" name="num1" required><br>

        <label>Input 2nd number:</label><br>
        <input type="number" name="num2" required><br>

        <label>Input 3rd number:</label><br>
        <input type="number" name="num3" required><br>

        <button type="submit" name="calculate">Submit</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $result = 0;

        switch (true) {
            case ($num1 >= $num2 && $num1 >= $num3):
                $result = $num1;
                break;

            case ($num2 >= $num1 && $num2 >= $num3):
                $result = $num2;
                break;

            default:
                $result = $num3;
        }

        echo "The maximum among the three numbers is: $result";
    }
    ?>

</body>

</html>
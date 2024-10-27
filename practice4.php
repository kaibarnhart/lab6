<!DOCTYPE html>
<html>
<head>
    <title>Practice 4</title>
</head>
<body>
    <h1>EECS 348 Lab 7 Practice 4</h1>

    <form method="get" action="">
        <label for="number">Size of the multiplication table:</label>
        <input type="number" name="number" id="number" required>
        <br><button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['number'])) {
        $size = (int)$_GET['number'];

        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        echo "<tr><th>*</th>"; // Header for row and column indexes

        for ($i = 1; $i <= $size; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $size; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Row header

            for ($j = 1; $j <= $size; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>

<?php
    $x = filter_input(INPUT_POST, 'product_description');
    $y = filter_input(INPUT_POST, 'list_price');
    $z = filter_input(INPUT_POST, 'discount_percent');

    $a = $y * $z * .01;
    $b = $y - $a;

    $y_f = "$". number_format($y, 2);
    $a_f = "$". number_format($a, 2);
    $b_f = "$". number_format($y, 2);
    $z_f = number_format($z). "%";
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($x); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($y); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($z); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($a); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($b); ?></span><br>
    </main>
</body>
</html>
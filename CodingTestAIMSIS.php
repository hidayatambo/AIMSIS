
<?php

function countWaysToMakeG3_5($amount, $coins)
{
    if ($amount == 0) {
        return 1;
    }

    if ($amount < 0 || empty($coins)) {
        return 0;
    }

    $coin = array_shift($coins);

    $count = 0;
    for ($i = 0; $i <= floor($amount / $coin); $i++) {
        $remainingAmount = $amount - ($i * $coin);
        $count += countWaysToMakeG3_5($remainingAmount, $coins);
    }

    return $count;
}

$coins = [200, 100, 50, 25, 10, 5, 1];
$amount = 350; // G3.5
$ways = countWaysToMakeG3_5($amount, $coins);
echo "Number of different ways to make G3.5: " . $ways;
?>
</body>
</html>

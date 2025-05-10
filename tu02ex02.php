<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}


$sum = 0;
echo "Prime numbers less than 100:<br>";
for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        echo "$i ";
        $sum += $i;
    }
}
echo "<br>Sum of all prime numbers less than 100 is: $sum<br>";

?>
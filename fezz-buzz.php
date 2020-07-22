<?php

for ($i = 1; $i <= 100; $i++) {
    $output = null;
    if (!($i % 3)) {
        $output .= "Fizz";
    }
    if (!($i % 5)) {
        $output .= "Buzz";
    }
    if ($output == null) {
        echo "$i<br>";
        continue;
    }
    echo "$output<br>";
}

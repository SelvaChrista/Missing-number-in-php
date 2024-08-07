<?php
function findMissingElements($array, $start, $end) {
    $arrayKeys = array_fill_keys($array, true);
    $missingElements = [];
    for ($i = $start; $i <= $end; $i++) {
        if (!array_key_exists($i, $arrayKeys)) {
            $missingElements[] = $i;
        }
    }
    return $missingElements;
}

// Example usage
$array = [1,2,3,4,9,10,12];
$start = 1;
$end = 12;
$missing = findMissingElements($array, $start, $end);
print_r($missing);
?>

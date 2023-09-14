<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity5</title>
</head>
<body>
    <?php
    #Bubble Sort Function
    function bubbleSort(arrat $a): array
    {
        for ($i = count($a) - 1; $i >0; $i--){
            for ($j = 0; $j < $i; $j++){
                if ($a[$j] > $a[$j + 1]) {
                    $temp = $a[$j];
                    $a[$j] = $a[$j + 1];
                    $a[$j + 1] = $temp;
                }
            }
        }
        return $a;
    }
    # php Linear Search
    function search($arr, $x) {
        for($i = 0; $i < sizeof($arr); $i++){
            if($arr[$i] == $x) return $i;
        }
        return -1;
    }
    # php Binary Search
    function binarySearch(Array $arr, $x){
        if (count ($arr) === 0 ) return false;
        $low = 0; 
        $high = count($arr) - 1;
        
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            if ($arr[$mid] == $x) {
                return true;
            }
            if ($x < $arr[$mid]) {
                $high = $mid - 1;
            }
            else {
                $low = $mid + 1;
            }
        }
        return false;
    }
    # Bubble Sort Algorithm Implementation
    $bs1 = [5, 2, 8, 9, 1];
    $bs2 = [10, 3, 4, 7, 5];
    print_r(bubbleSort($bs1));
    # You can use this output code echo var_dump(bubbleSort($bs1));
    echo "<br>";
    print_r(bubbleSort($bs2));
    # You can use this output code echo var_dump(bubbleSort($bs2));

    # Linear Search Implementation
    $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
    echo search($arr, 14)
    echo "<br>";

    # Binary Search Implementation
    $arr = array(1, 2, 3, 4, 5);
    $value = 5;
    if (binarySearch($arr, $value) == true){
        echo $value. "Exists";
    } 
    else {
        echo $value. "Doesn't Exist";
    }
    ?>
    
</body>
</html>
<h2>Count char of string</h2>

<pre>
----------------------------------
           Solution
----------------------------------
function countChar($str) {
    $chrCount = [];

    for($i=0; isset($str[$i]); $i++){
        $char = $str[$i];

        if(isset($chrCount[$char])){
            $chrCount[$char]++;
        }else{
            $chrCount[$char] = 1;
        }
       
    }
    return $chrCount;
}

$str = "Anirudh Kumar";
$result = countChar($str);

echo "<pre>";
print_r($result);
echo "</pre>";

----------------------------------
           Output
----------------------------------
</pre>

<?php
function countChar($str) {
    $chrCount = [];

    for($i=0; isset($str[$i]); $i++){
        $char = $str[$i];

        if(isset($chrCount[$char])){
            $chrCount[$char]++;
        }else{
            $chrCount[$char] = 1;
        }
       
    }
    return $chrCount;
}

$str = "Anirudh Kumar";
$result = countChar($str);

echo "<pre>";
print_r($result);
echo "</pre>";

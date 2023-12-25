<h2>Count lenght of string</h2>
<pre>
----------------------------------
           Solution
----------------------------------
function customStrlen($str) {
    $count = 0;

    for ($i=0; isset($str[$i]); $i++) {
        $count++;
    }

    return $count;
}


$str = "Anirudh";
$result = customStrlen($str);

echo $result;

----------------------------------
           Output
----------------------------------
</pre>
<?php

function customStrlen($str) {
    $count = 0;

    for ($i=0; isset($str[$i]); $i++) {
        $count++;
    }

    return $count;
}


$str = "Anirudh";
$result = customStrlen($str);

echo $result;
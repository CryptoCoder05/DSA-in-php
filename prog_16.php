<h2>Find no. of character appeared in a string in the key and value paird.</h2>
<?php
$input = 'Anirudh Singh';

function outputs($input)
{
    //suggest remove all spaces first
    $input = str_replace(' ', '', $input);
    $chars = str_split($input);

    foreach (array_count_values($chars) as $key => $value)
    {
        echo $key. ' appeared '.$value.' times<br>';
    }
}

outputs($input);
?>

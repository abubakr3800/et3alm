<?php

$string = file_get_contents("myfile.json");
$json_a = json_decode($string, true);

echo var_dump($json_a) . '<br/>' . '<br/>' . '<br/>';
echo count($json_a) . '<br/>' . '<br/>' . '<br/>';
echo var_dump($json_a[0]) . '<br/>' . '<br/>' . '<br/>';
// echo var_dump($json_a[0]) . '<br/>' . '<br/>' . '<br/>' ;
// echo $json_a[0]["name"];
// $new_values = array( "id" => (count($json_a) +1 ) , "name" => "ali" , "link" => "https:/google.com");
// array_push($json_a , $new_values);

foreach($json_a as $values){
    foreach($values as $value){
        echo $value . "<br>";
    }
}

$i = 0;
foreach ($json_a as $d2)
{
    $i++ ;
    echo "<br>" . $i . "<br>" . "<br>";
      $first_link = $d2 ['link'];
      foreach ($json_a as $d)
      {
        $second_link = $d ['link']; 
        echo strcmp($d2['name'] , $d['name']);
        if ( !strcmp($first_link , $second_link) && !strcmp($d2['name'] , $d['name']) )
        {
            echo "Match found!";
            unset($json_a[$i]);
        }
        else
        {
            echo "No match found!";
            // echo $first_link . " != " . $second_link; 
        }
    }

}
array_unique($json_a)
// echo json_encode($response);
file_put_contents('myfile.json', json_encode($json_a));
exit;

// $json_a[0] ->array_keys();
// echo $json_a['name'];

<?php

$name = $_POST['name'];
$link = $_POST['link'];

$string = file_get_contents("myfile.json");
$json_a = json_decode($string, true);

echo var_dump($json_a) . '<br/>' . '<br/>'. '<br/>';
// echo count($json_a) . '<br/>' . '<br/>' . '<br/>';

$new_values = array( "id" => (count($json_a) +1 ) , "name" => $name , "link" => $link );
array_push($json_a , $new_values);

function unique_multi_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
}

function link_href_array(){
    
}

  $output = unique_multi_array($json_a,'link');
  print_r($output);


// echo json_encode($output);
file_put_contents('myfile.json', json_encode($output));
exit;

// $json_a[0] ->array_keys();
// echo $json_a['name'];
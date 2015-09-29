<?php
$s = $_GET["s"];

$content=file_get_contents("http://eltonkola.com/androidsnippets/wp-json/posts?filter[s]=". $s );
$data=json_decode($content);

$sa = 5;

if(sizeof($data) < $sa){
    $sa = sizeof($data);
}


      $results = '';
      for($i = 0; $i < $sa; $i++){
          $entry = $data[$i];
          if($i == 0){
                 $results = $results . ' "' . $entry->title .'"';
          }else{
                $results = $results . ' , "' . $entry->title.'"'; 
          }
      
      }

echo '["'. $s .'" , [ ' . $results .' ] ]';
?>

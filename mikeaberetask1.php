<?php
  header("Content-Type:application/json");
    
    $json= array(
      'slackUsername' =>  'mike abere',
      'backend' => true,
      'age' => 29,
      'bio' => 'I am a backend developer'
    );
  
  echo json_encode($json);
  
  


?>

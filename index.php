<?php

  $string = file_get_contents("https://dolar.melizeche.com/api/1.0/");
  $json_a = json_decode($string, true);

  $json_main_data = $json_a['dolarpy'];
  $formatted_data = array();
  foreach ($json_main_data as $key => $value) {
    array_push($formatted_data, array('name' => $key, 'compra' => $value['compra'], 'venta' => $value['venta']));
  }

  echo json_encode($formatted_data);

 ?>

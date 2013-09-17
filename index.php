<?php

//prueba usuarios ->get
/*  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/usuarios");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //$data = json_decode(curl_exec($ch),true);
  $data = curl_exec($ch);
  print_r($data);
  curl_close($ch);*/
  
//prueba login ->post
  /*$postData = array(
  'email'=>'prueba@e.com',
  'pwd' =>'1234'
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/login");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_POST, true);
  //http_build_query => Generar una cadena de consulta codificada estilo URL a partir de array
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($ch);
  print_r($data);
  curl_close($ch);*/

 /*$postData = array(
  'nombre'=>'prueba11',
  'email'=>'prueba11@ejemplo.com',
  'pwd' =>'1234'
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/crearUsuario");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_POST, true);
  //http_build_query => Generar una cadena de consulta codificada estilo URL a partir de array
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($ch);
  print_r($data);
  curl_close($ch);*/
 
//prueba borrarUsuario ->delete
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/borrarUsuario/12");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
  $data = curl_exec($ch);
  print_r($data);
  curl_close($ch);

//prueba actualización nombre => put
/*$data = array("nombre" => 'usuario');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/actualizarNombre/12");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$data = curl_exec($ch);
print_r($data);
curl_close($ch);*/
?>

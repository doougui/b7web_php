<?php
  // $p = $_POST;
  // $p['qt_nome'] = strlen($_POST['nome']);
  // echo json_encode($p);

  $nome = addslashes($_POST['nome']);
  $senha = addslashes($_POST['senha']);

  $array = array('status' => '');

  if ($nome == 'Douglas' && $senha == '123') {
    $array['status'] = 'Ok';
  }

  echo json_encode($array);
?>

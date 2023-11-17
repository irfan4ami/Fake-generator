<?php


function remove_space($var)
{
  $new = str_replace("\n", "", $var);
  $new = str_replace("\t", "", $new);
  $new = str_replace(" ", "", $new);
  return $new;
}

function uuid() {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}

function nama(){
    $file = file_get_contents("data_nama.txt");
    $pecah = explode("\n", $file);
    $rand = mt_rand(0, 1699);
    $nama = $pecah[$rand];
    $nama = remove_space($nama);
    return $nama;
}

function angka()
{
  $length = mt_rand(2,5);
  $str = "";
  $characters = array_merge(range('0', '9'));
  $max = count($characters) - 1;
  for ($i = 0; $i < $length; $i++) {
    $rand = mt_rand(0, $max);
    $str .= $characters[$rand];
  }
  return $str;
}

function maps(){
      $file = file_get_contents("data_maps.txt");
      $pecah = explode("\n", $file);
      $rand = mt_rand(0, 1000);
      $maps = $pecah[$rand];
      return $maps;
}

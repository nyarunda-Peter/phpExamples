<?php
  session_start();
  include('admin/config/dbcon.php');


  function base_url($slug){
    echo 'http://127.0.0.1:81/peter/sampleblog/'.$slug;
  }
?>
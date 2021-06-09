<?php
  include __DIR__ . '/../php-ajax-dischi/data/db.php';
  header('Content-Type: application/json');
  echo json_encode($database);
?>
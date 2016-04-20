<?php

$term = $_GET['term'];

$result = [];
for ($i=0; $i < 5; $i++) {
  $result[] = $term . ($i + 1);
}

$result = [];
for ($i=0; $i < 5; $i++) {
  $obj = new stdClass();
  $obj->value = $i + 1;
  $obj->label = $term . ($i + 1);
  $result[] = $obj;
}

header('Content-Type: application/json');
echo json_encode($result);

<?php

$result_list = array();
//add model for articles

$sql = "SELECT * FROM about";

$result = $mysqli->query($sql);

while($item=$result->fetch_assoc()) {
    $result_list[] = $item;
}
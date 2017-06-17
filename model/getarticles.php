<?php

$result_list = array();
//add model for articles

$sql = "SELECT * FROM articles";

$result = $mysqli->query($sql);

while($item=$result->fetch_assoc()) {
    $result_list[] = $item;
}
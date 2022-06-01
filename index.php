<?php

$con = mysqli_connect('localhost', 'root', '', 'jsoninsert');

$filename = "data.json";

$data = file_get_contents($filename);

$array = json_decode($data, true);

foreach($array as $value) {
    $query = "INSERT INTO `jsondata` (`id`, `name`, `age`, `gender`) VALUES ('".$value['id']."', '".$value['name']."', '".$value['age']."', '".$value['gender']."')";

    mysqli_query($con,$query);
}

echo "Data Inserted Successfully";
<?php


require('client.php');

$marca = $_POST['marca'];

echo json_encode($client->ObtenerModelosPorMarca($marca));
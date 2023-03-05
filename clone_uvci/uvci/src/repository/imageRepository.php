<?php

$connexion = DataBase::connect();

$sql = "SELECT * FROM image";

$presentionStatment = $connexion->query($sql);
$presentionStatment->execute();

$images = $presentionStatment->fetchAll();

// $connexion->close();

DataBase::disconnect();
<?php

$connexion = DataBase::connect();

$sql = 'SELECT * FROM video';

$presentionStatment = $connexion->query($sql);
$presentionStatment->execute();

$videos = $presentionStatment->fetchAll();

// $connexion->close();

DataBase::disconnect();
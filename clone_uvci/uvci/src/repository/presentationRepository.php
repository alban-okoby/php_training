<?php

$connexion = DataBase::connect();

$sql = 'SELECT * FROM presentation';

$presentionStatment = $connexion->query($sql);
$presentionStatment->execute();

$presentions = $presentionStatment->fetchAll();

// $connexion->close();

DataBase::disconnect();
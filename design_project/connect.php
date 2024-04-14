<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='root';
$DATABASE='autpro';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$con){
    die(mysqli_error($con));
}

?>
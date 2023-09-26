<?php
function startConn(){
    $server = "localhost";
    $db = "assessment";
    $user = "admin";
    $conn = mysqli_connect($server, $user, '', $db);
}

function closeConn($conn){
    mysqli_close($conn);
}

function query(){

}

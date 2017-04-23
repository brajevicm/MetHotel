<?php
require_once 'config.php';
$error = '';
function registerUser($firstname, $lastname, $mail, $password)
{
    global $conn;
    if (!checkIfMailExists($mail)) {
        $insert = 'INSERT INTO ' . DB_TABLE . ' (firstname, lastname, mail, password) VALUES (?,?,?,?)';
        $query = $conn->prepare($insert);
        $hash = md5($password);
        $query->bind_param('ssss', $firstname, $lastname, $mail, $hash);
        $query->execute();
        $query->close();
    } else {
        $error .= 'User already exists.';
    }
}

function checkIfMailExists($mail) 
{
    global $conn;
    $select = 'SELECT * FROM ' . DB_TABLE. ' WHERE mail=?';
    $query = $conn->prepare($select);
    $query->bind_param('s', $mail);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $query->close();
}

function checkUser($mail, $password)
{
    global $conn;
    $select = 'SELECT * FROM ' . DB_TABLE . ' WHERE mail=? AND password=?';
    $query = $conn->prepare($select);
    $hash = md5($password);
    $query->bind_param('ss', $mail, $hash);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return 1;
    } else {
        return 0;
    }
    $query->close();
}

function getUser($mail)
{
    global $conn;
    $select = 'SELECT firstname, lastname FROM ' . DB_TABLE .' WHERE mail=?';
    $query = $conn->prepare($select);
    $query->bind_param('s', $mail);
    $query->execute();
    $query->store_result($firstname, $lastname);
    $returnValue = '';
    while ($query->fetch()) {
        $returnValue = $firstname . ' ' . $lastname;
    }
    $query->free_result();
    $query->close();
    return $returnValue;
}
?>
<?php
session_start();
require './db.php';
$session_id = $_SESSION['s_id'];

delete('DELETE FROM themes WHERE s_id = :session_id',
    [
        'session_id' => $session_id
    ]
);
unset($_SESSION['s_id']);
header('Location: ./global.php');
?>
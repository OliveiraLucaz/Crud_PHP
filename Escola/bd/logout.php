<?php

session_start();

unset($_SESSION['login']);
unset($_SESSION['usuario']);

header('location:/escola/index.php');
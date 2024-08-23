<?php

    // include_once 'user_session.php';

    // $userSession = new UserSession();
    // $userSession->closeSession();

    // header("location: login.php");
    session_start();
session_destroy();
header("Location: login.php");

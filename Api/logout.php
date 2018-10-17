<?php
/**
 * Created by PhpStorm.
 * User: m.younas
 * Date: 17.10.18
 * Time: 00:12
 */

session_start();
session_unset($_SESSION["isAuthenticated"]);
session_destroy();
exit();





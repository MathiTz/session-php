<?php
session_id('0rim7st7sdugqru47sehspbv00');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
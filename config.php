<?php

$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
// config path
define('PATH', ''); // isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// config DB
define('DB_HOST', ''); // host yang di gunakan
define('DB_USERNAME', ''); // username host
define('DB_PASSWORD', ''); // password host
define('DB_NAME', ''); // database yang di gunakan


?>
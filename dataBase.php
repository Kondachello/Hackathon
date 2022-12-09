<?php 
    // Init site function
    function init() {
        // session start
        session_start();

        // Global db connect id
        $_SESSION['db_connection'] = 0;
        $_SESSION['name'] = 0;
        // echo $_SESSION['db_connection'];
    }

    // connect to DB funtion
    function connect() {
        // Host Ip
        $db_host_ip = '127.0.0.1:3306';

        // Login for data base
        $db_login = 'root';

        // Password to db
        $db_password = 'root';

        // Name od db
        $db_name = 'hackaton 5';

        // connect
        $db_connection = mysqli_connect($db_host_ip, $db_login, $db_password, $db_name);

        if (!$db_connection) {
            echo 'Error connect to DB';
            die();
        }

        return $db_connection;
    }  
?>
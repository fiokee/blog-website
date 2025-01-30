<?php


//this check to see which credential or server we are onto
if($_SERVER['SERVER_NAME'] == "localhost"){

    define('$DBUSER' ,"root");
    define('$DBPASS', "");
    define('$DBNAME', "myblog_db");
    define('$DBHOST', "localhost");
    
}else{

    //for online server or hosting provider
    define('$DBUSER' ,"");
    define('$DBPASS', "");
    define('$DBNAME', "");
    define('$DBHOST', "");
}

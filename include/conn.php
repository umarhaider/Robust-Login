<?php

// Database credidentials.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'customer');
 
/* Attempt to connect to MySQL database. */
try
{
    /* Try connect to the database with defined credidentials. */
    if ($conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME))
    {
        /* do not need this in live code. */
        //echo 'Sucessfully Connected!<br>';
    }
    else
    {
        /* Exception message. */
        throw new Exception('Unable to connect<br>');
    }
}
catch(Exception $e)
{
    /* Display exception message. */
    echo $e->getMessage();
}
 

?>
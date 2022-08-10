<?php

namespace App\db\connection;
use PDO;

function createConnection()
{
    $dbPath = __DIR__ . '/../../db.sqlite';
    #$dbPath = __DIR__ . '../sqlite3_dbs/';
    touch($dbPath);

    #$db = null;
    $db=new PDO('sqlite:$dbPath');


    
    //TODO: Create connection to Sqlite DB

    return $db;
}

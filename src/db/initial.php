<?php

namespace App\db\initial;

global $db;

function initializeDb($db)
{
  $statement1 = 'CREATE TABLE "users" (
        "user_id"	INTEGER NOT NULL,
        "email"	TEXT NOT NULL,
        "first_name"	TEXT NOT NULL,
        "last_name"	TEXT NOT NULL,
        "password"	INTEGER NOT NULL,
        "created_at"	NUMERIC NOT NULL,
        PRIMARY KEY("user_id")
      )';
  $db->exec($statement1);

  $statement2 =  'CREATE TABLE "post" (
        "post_id"	INTEGER NOT NULL,
        "title"	TEXT NOT NULL,
        "body"	TEXT NOT NULL,
        "creator_id"	INTEGER NOT NULL,
        "post_created_at"	INTEGER NOT NULL,
        PRIMARY KEY("post_id"),
          FOREIGN KEY (creator_id)
          REFERENCES users(user_id) ON UPDATE CASCADE
                                               ON DELETE CASCADE)';
  $db->exec($statement2);
}

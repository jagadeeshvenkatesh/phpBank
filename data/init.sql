/**
 * Database creation script
 */

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    username VARCHAR NOT NULL,
    password VARCHAR NOT NULL
);

INSERT INTO
    user
    (
        username, password
    )
    VALUES(
        "jeremy",
        "password"  
    )
;

INSERT INTO
    user
    (
        username, password
    )
    VALUES(
        "vishhvak",
        "abc123"
    )
;
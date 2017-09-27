/**
 * Database creation script
 */

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    username VARCHAR NOT NULL,
    password VARCHAR NOT NULL
);

CREATE TABLE account (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    username VARCHAR NOT NULL,
    balance INTEGER NOT NULL,
    location VARCHAR NOT NULL,
    FOREIGN KEY (username) REFERENCES user(username)
);

CREATE TABLE trans (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    user VARCHAR NOT NULL,
    mode VARCHAR NOT NULL,
    amount INTEGER NOT NULL,
    transDate DATETIME NOT NULL,
    FOREIGN KEY (user) REFERENCES user(username)
);

/* Users */
INSERT INTO user (username, password) VALUES("jeremy", "password");
INSERT INTO user (username, password) VALUES("vishhvak", "abc123");

/* Accounts */
INSERT INTO account (username, balance, location) VALUES("jeremy", "14500", "Bangalore, India");
INSERT INTO account (username, balance, location) VALUES("vishhvak", "23500", "Chennai, India");

/* transactions */
INSERT INTO trans (user, mode, amount, transDate) VALUES("jeremy", "withdraw", "200", '2017-09-04');
INSERT INTO trans (user, mode, amount, transDate) VALUES("jeremy", "withdraw", "500", '2017-09-06');
INSERT INTO trans (user, mode, amount, transDate) VALUES("jeremy", "credit", "1500", '2017-09-13');
INSERT INTO trans (user, mode, amount, transDate) VALUES("jeremy", "credit", "2500", '2017-09-18');
INSERT INTO trans (user, mode, amount, transDate) VALUES("jeremy", "withdraw", "800", '2017-09-26');
INSERT INTO trans (user, mode, amount, transDate) VALUES("jeremy", "credit", "3500", '2017-09-28');


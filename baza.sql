DROP DATABASE IF EXISTS users;

CREATE DATABASE users;

USE users;

CREATE TABLE userdata
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   login varchar(30),
   haslo varchar(30),
   imie varchar(50),
   nazwisko varchar(50),
   email varchar(50),
   telefon varchar(30),
   miasto varchar(50)
);

$query = "UPDATE userdata SET
			   imie='$fname', nazwisko='$lname', email='$email', telefon='$phone', miasto='$city'
			   WHERE login='$user' AND haslo='$pass'";

INSERT INTO nazwa_tabeli (...) VALUES (...);
INSERT INTO nazwa_tabeli (...) VALUES (...);
INSERT INTO nazwa_tabeli (...) VALUES (...);

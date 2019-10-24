CREATE TABLE ARTICLE (
reference numeric(3),
intitule string,
description string,
type string,
prix float,

photo string);

CREATE TABLE POINTDEVENTES (
id numeric(3),
intitule string,
adresse string,
logo string);

CREATE TABLE ARTICLESAUNPOINTDEVENTES (
idpointdeventes numeric(3),
iddesarticles string);

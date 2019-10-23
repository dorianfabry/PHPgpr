CREATE TABLE ARTICLE (
intitule string,
description string,
type string,
prix float,
reference string,
photo string);

CREATE TABLE POINTDEVENTES (
id numeric(3),
intitule string,
adresse string);

CREATE TABLE ARTICLEAUNPOINTDEVENTES (
idpointdeventes numeric(3),
idarticle numeric(3));

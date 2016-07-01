create database euro;
use euro;

create table utilisateurs(
	idUtilisateur int not null, 
	loginUtilisateur text,  
	mdpUtilisateur text,
	isAdmin int
)engine=innodb;
alter table utilisateurs add primary key (idUtilisateur);
	insert into utilisateurs values (1,		"Rojo",		sha1("rojo"), 0);

create table groupes(
	idGroupe int not null,
	nomGroupe text
)engine=innodb;
alter table groupes add primary key (idGroupe);
	insert into groupes values (1,		"Groupe A");
	insert into groupes values (2,		"Groupe B");
	insert into groupes values (3,		"Groupe C");
	insert into groupes values (4,		"Groupe D");
	insert into groupes values (5,		"Groupe E");
	insert into groupes values (6,		"Groupe F");

create table equipes(
	idEquipe int not null, 
	nomEquipe text,
	idGroupeEquipe int
)engine=innodb;
alter table equipes add primary key (idEquipe);
alter table equipes add foreign key (idGroupeEquipe) references groupes (idGroupe);
	insert into equipes values (1,		"Kazakhstan", 1);
	insert into equipes values (2,		"Lettonie",	1);
	insert into equipes values (3,		"Islande",	1);
	insert into equipes values (4,		"Turquie",	1);
		insert into equipes values (5,		"Andorre", 2);
		insert into equipes values (6,		"Pays de Galles",	2);
		insert into equipes values (7,		"Bosnie",	2);
		insert into equipes values (8,		"Chypre",	2);
			insert into equipes values (9,		"Luxembourg", 3);
			insert into equipes values (10,		"Bielorussie",	3);
			insert into equipes values (11,		"Ukraine",	3);
			insert into equipes values (12,		"Slovaquie",	3);
				insert into equipes values (13,		"Allemagne", 4);
				insert into equipes values (14,		"Ecosse",	4);
				insert into equipes values (15,		"Gibraltar",	4);
				insert into equipes values (16,		"Pologne",	4);
					insert into equipes values (17,		"Saint-Marin", 5);
					insert into equipes values (18,		"Lituanie",	5);
					insert into equipes values (19,		"Suisse",	5);
					insert into equipes values (20,		"Angleterre",	5);
						insert into equipes values (21,		"Hongrie", 6);
						insert into equipes values (22,		"Irlande du nord",	6);
						insert into equipes values (23,		"Grece",	6);
						insert into equipes values (24,		"Roumanie",	6);


create table matchs(
	idMatch int not null, 
	idEquipe1Match int not null,
	idEquipe2Match int not null,
	scoreEquipe1Match int,
	scoreEquipe2Match int,
	statutMatch text
)engine=innodb;
alter table matchs add primary key (idMatch);
alter table matchs add foreign key (idEquipe1Match) references equipes (idEquipe);
alter table matchs add foreign key (idEquipe2Match) references equipes (idEquipe);
	insert into matchs values (1,1,2,0,0,"fini");
	insert into matchs values (2,3,4,3,0,"fini");
	insert into matchs values (3,5,6,1,2,"fini");
	insert into matchs values (4,7,8,1,2,"fini");
	insert into matchs values (5,9,10,1,1,"fini");	
	insert into matchs values (6,11,12,0,1,"fini");	
	insert into matchs values (7,13,14,2,1,"fini");
	insert into matchs values (8,15,16,0,7,"fini");
	insert into matchs values (9,17,18,0,2,"fini");
	insert into matchs values (10,19,20,0,2,"fini");
	insert into matchs values (11,21,22,1,2,"fini");	
	insert into matchs values (12,23,24,0,1,"fini");
		



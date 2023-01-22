-- création script base de donnée todolist
create database if not exists todoliste default character set utf8 collate utf8_general_ci;
use todoliste; 

set foreign_key_checks = 0;

-- création table client 

drop table if exists membres;
create table membres (
    mem_id int auto_increment primary key, 
    mem_pseudo varchar(500) unique not null, 
    mem_mdp varchar(500) not null, 
    mem_photo varchar(200),
    mem_role char(1) not null
)engine=innodb; 

drop table if exists taches;
create table taches (
    tac_id int auto_increment primary key, 
    tac_id_membre  varchar(500) not null, 
    tac_liste int not null,
    tac_nom_tache varchar(500) not null, 
    tac_description text, 
    tac_date datetime not null,
    tac_rappel datetime,
    tac_importance int not null,
    tac_complete char not null
)engine=innodb; 

drop table if exists listes;
create table listes (
    lis_id int auto_increment primary key, 
    lis_liste varchar(500) not null,
    lis_id_membre int not null
)engine=innodb;  

set foreign_key_checks =1;

-- contraintes d'intrégritées 
alter table listes add constraint membreListe foreign key (lis_id_membre) references membres(mem_id) on delete cascade;
alter table taches add constraint listeTache foreign key (tac_liste) references listes(lis_id) on delete cascade;
create database GTA;

use GTA;

create table agence(
    codeAgence int (50) primary key auto_increment,
    nom varchar (60) not null,
    adresse varchar (50) not null,
    telephone int (50) not null,
    email varchar (50) not null
)engine = InnoDB default charset = utf8;

create table voyage(
    codeVoyage int (50) primary key auto_increment,
    dateDepart datetime,
    dateArrivée datetime,
    villeDepart varchar (256) not null,
    villeArrivée varchar (256) not null,
    foreign key (codeAgence) references agence (codeAgence)
)engine = InnoDB default charset = utf8;

create table client(
    codeClient int (50) primary key auto_increment,
    nom varchar (60) not null,
    prenom varchar (60) not null,
    email varchar (50) not null,
    telephone int (50) not null,
    adresse varchar (50) not null
) engine = InnoDB default charset = utf8;

create table reservation(
    codeReservation int (50) primary key auto_increment,
    dateReservation datetime not null,
    statut boolean not null,
    foreign key (codeVoyage) references voyage (codeVoyage),
    foreign key (codeClient) references Client (codeClient)
)engine = InnoDB default charset = utf8;

create table paiement(
    codePaiement int (50) primary key auto_increment,
    datePaiement datetime,
    montant int (50) not null,
    modePaiement boolean not null,
    foreign key (codeReservation) references reservation (codeReservation)
)engine = InnoDB default charset = utf8;

create table avis(
    codeAvis int (50) not null,
    contenu text (256) not null,
    note boolean not null,
    dateAvis datetime,
    foreign key (codeClient) references client (codeClient),
    foreign key (codeVoyage) references voyage (codeVoyage)
)engine = InnoDB default charset = utf8;


create table role(
    codeRole int (50)primary key auto_increment,
    nomRole varchar (60) not null
)engine = InnoDB default charset = utf8;

create table utulisateur(
    codeUtilisateur int (50)primary key auto_increment,
    nom varchar (60) not null,
    prenom varchar (60) not null,
    email varchar (50) not null,
    telephone int (50) not null,
    foreign key (codeRole) references role (codeRole)
)engine = InnoDB default charset = utf8;

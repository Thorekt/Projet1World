create table USER_SITE(
    ID_u	integer PRIMARY key not null AUTO_INCREMENT,
    Nom varchar(20) not null,
    Prenom varchar(20) not null,
	mail varchar(40) not null,
    PSWRD varchar(120) not null
);
create table GRADE(
	ID_g integer PRIMARY key not null AUTO_INCREMENT,
    NV_autor integer not null,
    grade_name varchar(20) not null
);
create table user_grade(
	id_user integer not null,
    id_grade integer not null,
    FOREIGN KEY (id_user) REFERENCES USER_SITE (ID_u),
    FOREIGN KEY (id_grade) REFERENCES GRADE (ID_g)    
);

insert into GRADE values(null, 1, "etudiant"),
(null, 2, "prof"),
(null, 3, "admin");

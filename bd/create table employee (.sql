create table employee (
id NUMBER GENERATED ALWAYS AS IDENTITY (start with 1 increment by 1 ),
nom VARCHAR2(30),
prenom VARCHAR2(20),
salaire number(6,2),
hire_date date default sysdate,
constraint pk_em  PRIMARY KEY(id)


)
create database meubanco;

use meubanco;

create table tb_livros(
	id_livro int not null auto_increment,
    nm_livro varchar(45),
    dt_ano date,
    dt_cadastro date,
    qt_exemplares int(9),
    primary key(id_livro)
);
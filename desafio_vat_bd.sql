drop schema desafio_vat;

create	database desafio_vat;

use desafio_vat;

create table registro_os (
	numero_os bigint primary key auto_increment not null,
    solicitante varchar(100) not null,
    ocorrencia varchar(100) not null,
    descricao varchar(500) not null,
    data_os datetime not null
)auto_increment=1000;
    
-- 
insert into registro_os (numero_os, solicitante, ocorrencia, descricao) values(null, 'teste', 'CPU INOPERANTE', 'minha cpu queimou apos uma tempestade na escola . Foi realizado varios testes e nao funcionou.');

select * from registro_os;
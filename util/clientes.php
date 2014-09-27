<?php

$clientes = array(); //array de clientes

$clientes[1]  = new \EJS\Cliente\Tipos\PessoaFisica("Maria da Graça", "123.456.789-78", "Av Central", "m@mail.com", "3", "PF");
$clientes[1]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
            ->setCelular(null)
;

$clientes[2]  = new \EJS\Cliente\Tipos\PessoaFisica("Eduardo Silva", "222.666.888-99", "Rua Cbcd", "ed@br.mail.com", "5", "PF");
$clientes[2]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
            ->setCelular("12 99100-9876")
;

$clientes[3]  = new \EJS\Cliente\Tipos\PessoaJuridica("Jose da Silva", "001.999.876/0001-99", "Alameda XPTO", "email@uol.com.br", "2", "PJ");
$clientes[3]->setEnderecoCobranca("Alameda XPTO ZZ, 10")
            ->setCidadeCobranca("São Paulo")
;

$clientes[4]  = new \EJS\Cliente\Tipos\PessoaFisica("Paulo Batuta", "345.654.120-88", "Av SouzaLima", "batuta@hotmail.com", "1", "PF");
$clientes[4]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
            ->setCelular("11 88223-9876")
;

$clientes[5]  = new \EJS\Cliente\Tipos\PessoaFisica("Marlene Cilene", "123.765.998-99", "Av Centenário", "mc@ig.com.br", "1", "PF");
$clientes[5]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
            ->setCelular("14 99123-0076")
;

$clientes[6]  = new \EJS\Cliente\Tipos\PessoaFisica("Catarina Santos", "123.568.003-91", "Travessa do Carmo", "csantos@yahoo.com", "3", "PF");
$clientes[6]->setEnderecoCobranca("Rua ABC, 100")
            ->setCidadeCobranca("Campinas")
            ->setCelular("15 89023-9000")
;

$clientes[7]  = new \EJS\Cliente\Tipos\PessoaJuridica("Joao John", "12.456.789/0011-22", "Av dos Expedicionários", "john@mail.com", "5", "PJ");
$clientes[7]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
;

$clientes[8]  = new \EJS\Cliente\Tipos\PessoaFisica("Eulália Batista", "222.222.345-98", "Av Turmalina", "batista@r7.com", "4", "PF");
$clientes[8]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
            ->setCelular("11 98181-4553")
;

$clientes[9]  = new \EJS\Cliente\Tipos\PessoaFisica("Zuleide Aparecida", "111.111.111-11", "Rua Castello Branco", "zap@uol.com.br", "1", "PF");
$clientes[9]->setEnderecoCobranca(null)
            ->setCidadeCobranca(null)
            ->setCelular("14 99677-8765")
;

$clientes[10] = new \EJS\Cliente\Tipos\PessoaJuridica("Cida Castanheira", "12.455.876/0001-99", "Rua Gonçalves Dias", "cast@gmail.com", "2", "PJ");
$clientes[10]->setEnderecoCobranca("Rua Gonçalves Dias, 100")
             ->setCidadeCobranca("Bauru")
;

<?php
namespace EJS\Cliente\Tipos;
use EJS\Cliente\ClienteAbstract as ClienteClasseAbstrata;

class PessoaFisica extends ClienteClasseAbstrata{

    protected $celular;

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

    public function getEnderecoCobranca(){
        return $this->enderecoCobranca;
    }

    public function getCidadeCobranca(){
        return $this->cidadeCobranca;
    }
} 
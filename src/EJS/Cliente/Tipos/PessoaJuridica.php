<?php
namespace EJS\Cliente\Tipos;
use EJS\Cliente\ClienteAbstract as ClienteClasseAbstrata;

class PessoaJuridica extends ClienteClasseAbstrata{

    protected $sede;

    /**
     * @param mixed $sede
     */
    public function setSede($sede)
    {
        $this->sede = $sede;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSede()
    {
        return $this->sede;
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
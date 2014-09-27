<?php
namespace EJS\Cliente;

abstract class ClienteAbstract {

    protected $nome;
    protected $cpfcnpj;
    protected $email;
    protected $endereco;
    protected $grauImportancia; //grau de importancia
    protected $tipo;// tipo do cliente PF ou PJ
    protected $enderecoCobranca;
    protected $cidadeCobranca;

    public function __construct($nome, $cpf, $endereco, $email, $grauImportancia, $tipo){
        $this->nome = $nome;
        $this->cpfcnpj = $cpf;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->grauImportancia = $grauImportancia;
        $this->tipo = $tipo;
    }

    /**
     * @param mixed $cpfcnpj
     */
    public function setCpfcnpj($cpfcnpj)
    {
        $this->cpfcnpj = $cpfcnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfcnpj()
    {
        return $this->cpfcnpj;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $grauImportancia
     */
    public function setGrauImportancia($grauImportancia)
    {
        $this->grauImportancia = $grauImportancia;
        return $this;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $cidadeCobranca
     */
    public function setCidadeCobranca($cidadeCobranca)
    {
        $this->cidadeCobranca = $cidadeCobranca;
        return $this;
    }

    /**
     * @param mixed $enderecoCobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    abstract public function getGrauImportancia();
    abstract public function getEnderecoCobranca();
    abstract public function getCidadeCobranca();
}
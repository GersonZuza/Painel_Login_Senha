<?php

class Usuario {
    private $nome;
    private $email;
    private $senha;
    private $data;

    //set = Atribuir
    //get = Obter

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail()
{
        return $this->email;
}

    public function setEmail($email)
{
        $this->email = $email;

}

    public function getSenha()
{
    return $this->senha;
}

    public function setSenha($senha)
{
    $this->senha = $senha;
    return $this->senha = $senha;
}

    public function getData()
{
    return $this->data;
}

    public function setData($data)
{
    $this->data = $data;
    return $this;
}



}
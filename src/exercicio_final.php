<?php

declare(strict_types=1);

class Blog
{
    /*
     * @var PDO
     */
    private $conexao;

    public function __construct()
    {
        try{
            $this->conexao = new PDO('mysql:host=localhost;dbname=exemplo','root', '');
        }catch (Exception $e){
            $e->getMessage();
            die();
        }

    }

    public function listarPost() : array
    {
        $sql = 'select * from posts';

        $produtos = [];

        foreach ($this->conexao->query($sql) as $key => $value){
            array_push($produtos, $value);
        }

        return $produtos;
    }

    public function incluirPost(string $autor, string $descricao, $dataCricao) : int
    {
        $sql = 'insert into posts(autor, conteudo, datacriacao) values(?,?,?)';

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $autor);
        $prepare->bindParam(2, $descricao);
        $prepare->bindParam(3, $dataCricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function editarPost( string $descricao, string $dataAtualizacao, int $id) : int
    {
        $sql = 'update posts set conteudo = ?, dataatualizacao = ? where id = ?';

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $dataAtualizacao);
        $prepare->bindParam(3, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function excluirPost(int $id) : int
    {
        $sql = 'delete from posts where id = ?';

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();

        return  $prepare->rowCount();
    }
}
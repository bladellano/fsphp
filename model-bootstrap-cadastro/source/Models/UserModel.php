<?php


namespace Source\Models;


class UserModel extends Model
{
    /**
     * @var array $safe no update or create
     */
    protected static $safe = ["id","created_at","updated_at"];
    /**
     * @var string $entity databse table
     */
    protected static $entity = "users";

    public function bootstrap(string $firstName,string $lastName, string $email, string $document =null)
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
        $this->email = $email;
        $this->document = $document;
        return $this;
    }

    public function load(int $id, string  $columns = "*"):?UserModel
    {
        $load = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE id = :id","id={$id}");
        if($this->fail() || !$load->rowCount()){
            $this->messege = "Usuário não enconrado para o id informado";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    }

    public function find($email,string  $columns = "*"):?UserModel
    {
        $find = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE email = :email","email={$email}");
        if($this->fail() || !$find->rowCount()){
            $this->messege = "Usuário não enconrado para o e-mail informado";
            return null;
        }
        return $find->fetchObject(__CLASS__);
    }

    public function all(int $limit=30,int $offset=0,string  $columns = "*"):?array
    {
        $all = $this->read("SELECT {$columns} FROM ".self::$entity." LIMIT :l OFFSET :o","l={$limit}&o=$offset");
        if($this->fail() || !$all->rowCount()){
            $this->messege = "Sua consulta não retornou usuários";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS,__CLASS__);
    }

    public function save()
    {
        /*User Update*/
        if(!empty($this->id)){
            $userId = $this->id;
        }
        /*User Create*/
        if(empty($this->id)){
            if($this->find($this->email)){
                $this->messege = "O e-mail informado já está cadastrado";
                return null;
            }

            $userId = $this->create(self::$entity, $this->safe());

            if($this->fail()){
                $this->messege = "Erro ao cadastrar, verifique os dados";
            }
            $this->messege = "Cadastro realizado com sucesso";
        }
        $this->data = $this->read("SELECT * FROM users WHERE id = :id","id={$userId}")->fetch();
        return $this;

    }

    public function destroy()
    {

    }
    private function required()
    {

    }
}
<?php


namespace Source\Models;


/**
 * Class UserModel
 * @package Source\Models
 */
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

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string|null $document
     * @return $this
     */
    public function bootstrap(string $firstName, string $lastName, string $email, string $document =null)
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
        $this->email = $email;
        $this->document = $document;
        return $this;
    }

    /**
     * @param int $id
     * @param string $columns
     * @return UserModel|null
     */
    public function load(int $id, string  $columns = "*"):?UserModel
    {
        $load = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE id = :id","id={$id}");
        if($this->fail() || !$load->rowCount()){
            $this->messege = "Usuário não enconrado para o id informado";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    }

    /**
     * @param $email
     * @param string $columns
     * @return UserModel|null
     */
    public function find($email, string  $columns = "*"):?UserModel
    {
        $find = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE email = :email","email={$email}");
        if($this->fail() || !$find->rowCount()){
            $this->messege = "Usuário não encontrado para o e-mail informado";
            return null;
        }
        return $find->fetchObject(__CLASS__);
    }

    /**
     * @param int $limit
     * @param int $offset
     * @param string $columns
     * @return array|null
     */
    public function all(int $limit=30, int $offset=0, string  $columns = "*"):?array
    {
        $all = $this->read("SELECT {$columns} FROM ".self::$entity." LIMIT :l OFFSET :o","l={$limit}&o=$offset");
        if($this->fail() || !$all->rowCount()){
            $this->messege = "Sua consulta não retornou usuários";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS,__CLASS__);
    }

    /**
     * @return $this|null
     */
    public function save():?UserModel
    {
        if(!$this->required()){
            return null;
        }
        /*User Update*/
        if(!empty($this->id)){
            $userId = $this->id;

            $email = $this->read("SELECT id FROM users WHERE email = :email AND id != :id","email={$this->email}&id={$userId
                }");

            if($email->rowCount()){
                $this->messege = "O e-mail informado já está cadastrado";
                return null;
            }
            $this->update(self::$entity,$this->safe(),"id = :id","id={$userId}");
            if($this->fail()){
                $this->messege = "Erro ao atualizar, verifique os dados";
            }
            $this->messege = "Dados atualizados com sucesso";

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

    /**
     * @return $this|null
     */
    public function destroy():?UserModel
    {
        if(!empty($this->id)){
            $this->delete(self::$entity,"id = :id","id={$this->id}");
        }

        if($this->fail()){
            $this->messege = "Não foi possível remover o usuário";
        }
        $this->messege = "Usuário removido com sucesso";
        $this->data = null;
        return $this;
    }

    /**
     * @return bool
     */
    private function required():bool
    {
        if(empty($this->first_name) || empty($this->last_name) || empty($this->email)){
            $this->messege = "Nome, sobrenome e e-mail são obrigatórios";
            return false;
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->messege = "O e-mail informado não parece válido";
            return false;
        }
        return true;
    }
}
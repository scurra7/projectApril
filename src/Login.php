<?php
/**
 * Created by PhpStorm.
 * User: Steve Curran
 * Date: 07/04/2016
 * Time: 13:01
 */

namespace Itb;



use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;


class Login extends DatabaseTable
{
    const ROLE_USER=0;
    const ROLE_ADMIN=1;


    private $id;
    private $password;
    private $role;
    private $username;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
        $this->password = $hashedPassword;
    }

    public static function canFindMatchingUsernameAndPassword($username, $password)
    {
        $user = Login::getOneByUsername($username);
       // var_dump($user);
        //die();
        // if no record has this username, return FALSE
        if(null == $user)
        {
            return false;
        }

        // hashed correct password
        $hashedStoredPassword = $user->getPassword();

        return password_verify($password, $hashedStoredPassword);
    }

    public static function FindingRole($username)
    {
        $user = Login::getOneByUsername($username);

        if(null == $user)
        {
            return false;
        }

        // hashed correct password
        //$hashedStoredPassword = $user->getPassword();

        return $user->getRole();
    }
    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $username
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * if record exists with $username, return User object for that record
     * otherwise return 'null'
     *
     * @param $username
     *
     * @return mixed|null
     */
    public static function getOneByUsername($username)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM logins WHERE username=:username';
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, __CLASS__);
        $statement->execute();

        if ($object = $statement->fetch())
        {
            return $object;
        } else {
            return null;
        }
    }

}
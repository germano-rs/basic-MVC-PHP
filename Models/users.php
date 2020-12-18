<?php


class users
{
    private $con;

    public function __construct()
    {
        $this->con = Connection::getConnection();
    }
    public function getUser()
    {
        $sql = 'select * from users';
        $cmd = $this->con->query($sql);
        $data = $cmd->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function getUsers()
    {
        $sql = 'select * from users';
        $cmd = $this->con->query($sql);
        $data = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}

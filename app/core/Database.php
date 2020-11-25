<?php

class Database
{
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;

    private $dbh;
    private $stmnt;

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host .";dbname=" . $this->db_name; // data source name
        $option = [
            PDO::ATTR_PERSISTENT => true,   // biar koneksi ke database selalu terjaga
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        
        try
        {
            // Mencoba untuk mengoneksikan ke database
            $this->dbh = new PDO($dsn, $this->db_user , $this->db_pass, $option);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmnt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = NULL)
    {
        if($type == NULL)
        {
            switch (true)
            {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                    
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                    
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmnt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmnt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmnt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmnt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmnt->rowCount();
    }

}
<?php

class Mahasiswa_model
{
    private $tabel = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM " . $this->tabel);
        
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM ". $this->tabel . " WHERE id=:id");
        
        $this->db->bind("id", $id);
        
        return $this->db->single();
    }

    public function getMahasiswaByUsername($username)
    {
        $this->db->query("SELECT * FROM ". $this->tabel . " WHERE username=:username");
        
        $this->db->bind("username", $username);
        
        return $this->db->single();
    }

    public function cekUser($username, $pass)
    {
        $query = "SELECT * FROM " . $this->tabel . " WHERE username=:username AND password=:pass";
        $this->db->query($query);
        
        $this->db->bind("username", $username);
        $this->db->bind("pass", $pass);
        
        $this->db->execute();
        if ($this->db->rowCount() > 0)  {return true;}
        else                            {return false;}
    }

    public function tambahMahasiswa($data)
    {
        $this->db->query("INSERT INTO " . $this->tabel .  " VALUES(NULL, :nama, :jurusan, :email)");
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM " . $this->tabel . " WHERE id=:id";
        $this->db->query($query);

        $this->db->bind("id", $id);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahMahasiswa($data)
    {
        $query = "UPDATE " . $this->tabel . " SET nama=:nama, jurusan=:jurusan, email=:email WHERE id=:id";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getCariMahasiswa($keyword)
    {
        $query = "SELECT * FROM " . $this->tabel . " WHERE nama LIKE :nama";
        $this->db->query($query);

        $this->db->bind("nama", "%$keyword%");

        return $this->db->resultSet();
    }
}
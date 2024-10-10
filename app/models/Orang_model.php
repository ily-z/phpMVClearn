<?php
class Orang_model{
    // private $orang=[
    //     [
    //         "nama"=> "bagus",
    //         "nomer"=> "321",
    //         "alamat"=> "surabaya"
    //     ],
    //     [
    //         "nama"=> "mamat",
    //         "nomer"=> "121",
    //         "alamat"=> "bojonegro"
    //     ],
    //     [
    //         "nama"=> "joko",
    //         "nomer"=> "831",
    //         "alamat"=> "kamal"
    //     ]

    //     ];
    // private $dbh; //database handler
    // private $stmt;// statement, nyikmpen query
    // public function __construct(){
    //     $dsn="mysql:host=localhost;dbname=phpmvc";
    //     try{
    //         $this->dbh = new PDO($dsn,"root","");
    //     }catch(PDOException $e){
    //         die( $e->getMessage());
    //     }
    // }
    private $table="data_orang";
    private $db;

    public function __construct(){  
        $this->db = new Database;
    }
    public function takeALLorang(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function takeOrangById($id){
        $this->db->query("SELECT * FROM ".$this->table." WHERE id=:id ");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function hapusDataOrang($id){
        $this->db->query("DELETE FROM ".$this->table." WHERE id=:id ");
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataOrang($data){
        $query = "INSERT INTO data_orang 
        VALUES
        ('',:nama, :nomer,:alamat,:status)";

        $this->db->query($query);
        $this->db->bind("nama",$data["inputnama"]);
        $this->db->bind("nomer",$data["inputnomer"]);
        $this->db->bind("alamat",$data["inputalamat"]);
        $this->db->bind("status",$data["inputstatus"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataOrang($data){
        $query = "UPDATE data_orang SET 
        nama= :nama,
        alamat =:alamat,
        nomer =:nomer,
        status =:status
        WHERE id =:id";

        $this->db->query($query);
        $this->db->bind("nama",$data["inputnama"]);
        $this->db->bind("nomer",$data["inputnomer"]);
        $this->db->bind("alamat",$data["inputalamat"]);
        $this->db->bind("status",$data["inputstatus"]);
        $this->db->bind("id",$data["id"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

}

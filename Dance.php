<?php
namespace Core\Data;

class Student {
    public $STB_No = null;
    public $Name = null;
    public $Email = null;
    public $Mobile_no = null;
    public $Address = null;
    public $Pincode = null;
    public $Adhar_no = null;

    private $table_name = null;
    private $conn = null;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE;
    }

    public function getRecords() {
        $sql = "SELECT * FROM {$this->table_name} ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function insert() {
        $sql = "insert into participants(STB_No,Name,Mobile_no,Email,Address,Pincode,Adhar_no) values(?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$this->STB_no);
        $stmt->bindParam(2,$this->Name);
        $stmt->bindParam(3,$this->Mobile_no);
        $stmt->bindParam(4,$this->Email);
        $stmt->bindParam(5,$this->Address);
        $stmt->bindParam(6,$this->Pincode);
        $stmt->bindParam(7,$this->Adhar_no);

        $stmt->execute();

        return $stmt->rowCount();
        
    }

    public function update() {
        $sql = "UPDATE
                    {$this->table_name}
                SET
                    Name = :Name,
                    Mobile_no = :Mobile_no,
                    Email = :Email,
                    Address = :Address,
                    Pincode = :Pincode,
                    Adhar_no = :Adhar_no
                WHERE
                    STB_No = :STB_No";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':Name',$this->Name);
        $stmt->bindParam(':Mobile_no',$this->Mobile_no);
        $stmt->bindParam(':Email',$this->Email);
        $stmt->bindParam(':Address',$this->Address);
        $stmt->bindParam(':Pincode',$this->Pincode);
        $stmt->bindParam(':Adhar_no',$this->Adhar_no);
        $stmt->bindParam(':STB_No',$this->STB_No);

        $stmt->execute();
        return $stmt->rowCount();
        
    }

    function delete() {
        $sql = "DELETE FROM {$this->table_name} WHERE STB_No = ?";
        $stmt = $this->conn->prepare($sql);
        $this->prn = \htmlspecialchars($this->STB_No);
        // echo $this->prn;
        $stmt->bindParam(1,$this->STB_No);

        // echo $stmt->q
        $stmt->execute();
        return $stmt->rowCount();
    }



}
?>
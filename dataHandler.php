<?php
class DataHandler
{
    private $conn;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function tambahData($nama, $usia, $jenisKelamin, $hobi)
    {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, usia, jenis_kelamin, hobi) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $nama, $usia, $jenisKelamin, $hobi);
        $stmt->execute();
        $stmt->close();
    }

    public function getData()
    {
        $result = $this->conn->query("SELECT * FROM mahasiswa");
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function updateData($id, $nama, $usia, $jenisKelamin, $hobi)
    {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama=?, usia=?, jenis_kelamin=?, hobi=? WHERE id=?");
        $stmt->bind_param("sissi", $nama, $usia, $jenisKelamin, $hobi, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}
?>

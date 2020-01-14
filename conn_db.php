
<?php 
class dbConfig {
   public $host;
   public $username;
   public $password;
   public $dab;
   public $conn;

public function dbConnect() {
    $this->conn = mysqli_connect($this->host,$this->username,$this->password);

    if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "";
    }

    $db_selected = mysqli_select_db($this->conn, $this->dab);

    if (!$db_selected) {
        // if the given database doesn't exists
        // creates new database with that name
        $db_sql = 'CREATE DATABASE parking';

        // verify the database is created
        if (mysqli_query($this->conn, $db_sql)){
            echo "Database parking already exists or created successfully\n";
        } else {
            echo 'Error creating database: ' . mysqli_error() . "\n";
        }
    }

    // creating tables
    $table_sql1 = "CREATE TABLE IF NOT EXISTS users (".
            "id INT PRIMARY KEY AUTO_INCREMENT,".
            "username VARCHAR(30) UNIQUE,".
            "password VARCHAR(50),".
            "phone VARCHAR(50),".
            "name VARCHAR(100),".
            "vehicletype VARCHAR(50),".
            "vehicleno VARCHAR(50),".
            "email VARCHAR(70) UNIQUE); ";

    $table_sql2 = "CREATE TABLE IF NOT EXISTS owners (".
            "id INT PRIMARY KEY AUTO_INCREMENT,".
            "username VARCHAR(30) UNIQUE,".
            "password VARCHAR(50),".
            "phone VARCHAR(50),".
            "name VARCHAR(100),".
            "address VARCHAR(50),".
            "email VARCHAR(70) UNIQUE); ";

    $table_sql3 = "CREATE TABLE IF NOT EXISTS admin (".
            "id INT PRIMARY KEY AUTO_INCREMENT,".
            "name VARCHAR(100),".
            "username VARCHAR(30) UNIQUE,".
            "password VARCHAR(50),".
            "phone VARCHAR(50),".
            "email VARCHAR(70) UNIQUE); ";

    $table_sql4 = "CREATE TABLE IF NOT EXISTS parking_slot (".
            "slot_id INT PRIMARY KEY AUTO_INCREMENT,".
            "user_id int(20) NOT NULL UNIQUE,".
            "name varchar(1000) NOT NULL,".
            "phone varchar(100) NOT NULL,".
            "city varchar(1000) NOT NULL,".
            "area varchar(1000) NOT NULL,".
            "block varchar(200) NOT NULL,".
            "road varchar(200) NOT NULL,".
            "house varchar(20) NOT NULL,".
            "time_from time NOT NULL,".
            "time_to time NOT NULL,".
            "cost int(20) NOT NULL); ";


    $table_sql5=" CREATE TABLE IF NOT EXISTS reserve (".
  "reserve_id int(20) PRIMARY KEY AUTO_INCREMENT,".
  "slot_id int(20) NOT NULL,".
  "reserved_by int(20) NOT NULL,".
  "date date NOT NULL,".
  "time_from time NOT NULL,".
  "time_to time NOT NULL);

    ";









    // verify the table is created
        if (mysqli_query($this->conn, $table_sql1)) {
            echo "";
        } else {
            echo 'Error creating table1: ' . mysqli_error($table_sql1) . "\n";
        }
        if (mysqli_query($this->conn, $table_sql2)) {
            echo "";
        } else {
            echo 'Error creating table2: ' . mysqli_error($table_sql2) . "\n";
        } 
        if (mysqli_query($this->conn, $table_sql3)) {
            echo "";
        } else {
            echo 'Error creating table3: ' . mysqli_error($table_sql3) . "\n";
        }
        if (mysqli_query($this->conn, $table_sql4)) {
            echo "";
        } else {
            echo 'Error creating table3: ' . mysqli_error($table_sql4) . "\n";
        }
        if (mysqli_query($this->conn, $table_sql5)) {
            echo "";
        } else {
            echo 'Error creating table3: ' . mysqli_error($table_sql5) . "\n";
        }
       
}
}


$obj = new dbConfig();

$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->dab = 'parking';
$obj->dbConnect();


?>

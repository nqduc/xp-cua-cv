<?php 
// $hostname ='localhost';
// $usename ='root';
// $password = '';
// $databasename ='cv_cua_a';
// $connect = mysqli_connect($hostname,$usename,$password,$databasename) ;
// if (!$connect) {
//     exit ('kết nối không thành công !');
// }
// echo 'kết nối thành công!';
class DBconn {
    private $hostName;
    private $useName;
    private $password;
    private $dbName;
    public $conn;

    function __construct(){
        $this ->hostName = 'localhost';
        $this ->useName ='root';
        $this ->password = '';
        $this ->dbName = 'bist_training';
    }
   function connect(){
       $this->conn = mysqli_connect($this->hostName, $this->useName, $this->password, $this->dbName);

       if (!$this->conn){
           exit ("ket noi that bai");
       } 
       else {
           echo "ket noi thanh cong";
       }
   }

   function insert ($table, $column, $values){
       $mysql= "INSERT INTO $table $column VALUES $values;";

       $insert = $this->conn->query($mysql);
       if ( $insert === TRUE){
        echo "insert successful";
       }else {
           echo "error:" .$this->conn->error;
       }
   }

    function delete($table, $column, $values){
        $mysql="DELETE FROM $table WHERE $column = $values;";

        $delete =$this->conn->query($mysql);
        if ($delete === TRUE){
            echo "delete successful";
        }else {
            echo "error:" .$this->conn->error;
        }
    }

    function update($table, $column3, $values3) {
        $mysql= "UPDATE $table SET $column3 = $values3;";

        $update =$this->conn->query($mysql);
        if ($update === TRUE){
        echo "update successful";
        }else {
            echo "error:" .$this->conn->error;
        }
    }
    
}

//    $sql .= " INSERT INTO user (name, mail ,phone) VALUES ('duc', 'nguyenquangduc@mail.com', '0565101365');";
// $sql .= " INSERT INTO user (name, mail ,phone) VALUES ('nguyen', 'nguyenquangnguyen@mail.com', '05365466986');";
// $sql .= " INSERT INTO user (name, mail, phone) VALUES ('dat', 'nguyenquangdat@mail.com', '02556356123');";
// $sql .= " INSERT INTO user (name, mail, phone) VALUES ('tuyen', 'hoancongtuyen@mail.com', '01234567890');";
// $sql .= " INSERT INTO user (name, mail, phone) VALUES ('hien', 'nguyenthihien@mail.com', '030099036');";


    $conn1 = new DBconn();
    $conn1 ->connect();
    // var_dump($conn1->conn); 
    $table1= "awards";
    $column1="(user_id, prize, content)";
    $value1="(1 ,'con chim non 1','ngay vui ve')";
    $conn1->insert($table1 ,$column1 ,$value1);
    $conn1->delete($table1 ,$column1 ,$value1);

    $table3 = "skills";
    $column3 = "skills";
    $values3 = "'rather'";
    $conn1->update($table3, $column3, $values3);
?>
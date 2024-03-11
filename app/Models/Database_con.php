<?php 
namespace App\Models;
use CodeIgniter\Model;

class Database_con extends Model{
	protected $conn;
    public function __construct(){
        // $this->conn = [
        //     'DSN'      => '',
        //     'hostname' => 'localhost',
        //     'username' => 'root',
        //     'password' => '',
        //     'database' => 'full_stack_dev',
        //     'DBDriver' => 'MySQLi',
        //     'DBPrefix' => '',
        //     'pConnect' => false,
        //     'DBDebug'  => (ENVIRONMENT !== 'production'),
        //     'charset'  => 'utf8',
        //     'DBCollat' => 'utf8_general_ci',
        //     'swapPre'  => '',
        //     'encrypt'  => false,
        //     'compress' => false,
        //     'strictOn' => false,
        //     'failover' => [],
        //     'port'     => 3306,
        // ];
    }
    public function getValues()
    {
        $db = \Config\Database::connect();

        $sql = "SELECT * FROM `student_details`";
        $builder = $db->query($sql);
        $output= $builder->getResultArray();

        return $output;
    }

    public function deleteValues($roll_number)
    {
        $db = \Config\Database::connect();

        $sql = "DELETE FROM `student_details` WHERE `roll_number`=?";
        $builder = $db->query($sql,[$roll_number]);

        return $builder;
    }

    public function createValues($roll_number,$name,$mark)
    {
        $db = \Config\Database::connect();

        $sql = "INSERT INTO `student_details`(`roll_number`,`name`,`mark`) VALUES(?,?,?)";
        $builder = $db->query($sql,[$roll_number,$name,$mark]);

        return $builder;
    }

    public function updateValues($roll_number,$name,$mark)
    {
        $db = \Config\Database::connect();

        $sql = "UPDATE `student_details` SET `name` = ?, `mark` = ? WHERE `roll_number`=?";
        $builder = $db->query($sql,[$name,$mark,$roll_number]);

        return $builder;
    }
}

?>
<?php
class Records {
 
    private $conn;
    private $table_name = "test_sql";

    public $Id;
    public $Name;
    public $Type;
    public $Active;
    public $Mult;
    public $Require;
    public $Sort;
	public $Code;


    public function __construct($db)
		{
			$this->conn = $db;
		}
}
function read(){

    $query = "SELECT 
					`ID`, `Name`, `Type`, `Active`, `Mult`, `Require`, `Sort`, `Code`
				FROM 
					" . $this->table_name . " 
				WHERE 1";

				
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
}
   
?>
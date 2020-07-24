<?php
class Records {
 
    private $conn;
    private $table_name = "records";

    public $ID;
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
	
	
	
	
	
	
	function update(){

    // запрос для обновления записи (товара) 
    $query = "UPDATE
                " . $this->table_name . "
            SET
				`Name`=Name,
				`Type`=Type,
				`Active`=Active,
				`Mult`=Mult,
				`Require`=Require,
				`Sort`=Sort,
				`Code`=Code 
            WHERE
                id = :ID";

    // подготовка запроса 
    $stmt = $this->conn->prepare($query);

    // очистка 
    $this->Name=htmlspecialchars(strip_tags($this->Name));
    $this->Type=htmlspecialchars(strip_tags($this->Type));
    $this->Active=htmlspecialchars(strip_tags($this->Active));
    $this->Mult=htmlspecialchars(strip_tags($this->Mult));
    $this->Require=htmlspecialchars(strip_tags($this->Require));
	$this->Sort=htmlspecialchars(strip_tags($this->Sort));
	$this->Code=htmlspecialchars(strip_tags($this->Code));
	$this->id=htmlspecialchars(strip_tags($this->id));
    // привязываем значения 
    $stmt->bindParam(':Name', $this->Name);
    $stmt->bindParam(':Type', $this->Type);
    $stmt->bindParam(':Active', $this->Active);
	$stmt->bindParam(':Mult', $this->Mult);
    $stmt->bindParam(':Require', $this->Require);
	$stmt->bindParam(':Sort', $this->Sort);
	$stmt->bindParam(':Code', $this->Code);
    $stmt->bindParam(':ID', $this->ID);

    // выполняем запрос 
    if ($stmt->execute()) {
        return true;
    }

    return false;
}
function delete(){

    // запрос для удаления записи (товара) 
    $query = "DELETE FROM " . $this->table_name . " WHERE ID = ?";

    // подготовка запроса 
    $stmt = $this->conn->prepare($query);

    // очистка 
    $this->ID=htmlspecialchars(strip_tags($this->ID));

    // привязываем id записи для удаления 
    $stmt->bindParam(1, $this->ID);

    // выполняем запрос 
    if ($stmt->execute()) {
        return true;
    }

    return false;
}
}
   
?>
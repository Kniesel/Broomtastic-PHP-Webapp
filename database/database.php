<?php
// include database connection only once,
// it could be possible that the connection will be loaded at another DAO
include_once "../business/connection.php";

// Database Layer for Product
class ProductDAO {
	private $connection = null;
	
	// Initializing the DB-Connection for the further CRUD-Operations
	public function __construct() {
		$db = new DB();
		$this->connection = $db->connect();
		
		if(! $this->connection) {
			die( 'ERROR while connecting' );
		}
	}
	
	
	/*
	 * Get product by id
	 */
	// public function read($pk_username) {
	// 	$stmt = $this->connection->prepare( "SELECT * FROM products WHERE id = ?;" );
	// 	$stmt->bind_param( 's', $pk_username );
		
	// 	if ($stmt->execute ()) {
	// 		$stmt->bind_result( $pk_username);
	// 		while ( $stmt->fetch() ) {
	// 			$row['pk_username'] = $pk_username;
	// 		}
	// 		return $row;
	// 	} else {
	// 		echo "0 results";
	// 		return - 1;
	// 	}
	// }

//------------------------------------------------------
//TEST

	/*
	 * Get all Products from a specific category
	 */
	public function readByCategory($category) {

		 $select = "SELECT * FROM products WHERE category = \"?\";";
		  if ($this->connection == null) {
		   echo "Connection not initialized!";
		  } else if ($result = mysqli_query ( $this->connection, $select )) {
		   $items = null;
		   if (mysqli_num_rows ( $result ) > 0) {
		    while ( $row = mysqli_fetch_assoc ( $result ) ) {
		     $items [] = $row;
		    }
		    return $items;
		   } else {
		    echo "</br>0 results";
		   }
		  } else {
		   echo "Resultset leer/nicht definiert!";
		  }
		 }



//------------------------------------------------------



	
	/*
	 * Get all Products in the Database
	 */
	public function readAll() {
		$select = "SELECT * FROM products;";
		if ($this->connection == null) {
			echo "Connection not initialized!";
		} else if ($result = mysqli_query ( $this->connection, $select )) {
			$items = null;
			if (mysqli_num_rows ( $result ) > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					$items [] = $row;
				}
				return $items;
			} else {
				echo "</br>0 results";
			}
		} 
		else {
			echo "Resultset leer/nicht definiert!";
		}
	}
	
}

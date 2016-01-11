<?php
// include database connection only once,
// it could be possible that the connection will be loaded at another DAO
include_once "./business/connection.php";

// DATABASE-LAYER FOR PRODUCT -------------------------------------------------------------------
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
	 * Get all products from a specific category
	 */
	public function readByCategory($category) {

		if ($stmt = $this->connection->prepare("SELECT * FROM products WHERE category = ?;")) {
			$stmt->bind_param( 's', $category );
			$stmt->execute();
			$item = null;
			$stmt->bind_result( $col0, $col1, $col2, $col3, $col4);
			while ( $stmt->fetch() ) {
				$item[] = ['productname' => $col1, 'category' => $col2, 'price' => $col3, 'description' => $col4];
			}
			return $item;
		}
	}



	/*
	 * Get all products in the database
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
				//echo "</br>0 results";
			}
		} 
		else {
			//echo "Resultset leer/nicht definiert!";
		}
	}
	
}



// DATABASE-LAYER FOR USER -------------------------------------------------------------------
class UserDAO {
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
	 * Create a new user with pk_username
	 */
	public function create($pk_username) {
		$stmt = $this->connection->prepare( "INSERT INTO users (pk_username) VALUES (?);" );
		$stmt->bind_param( 's', $pk_username );
		if ($stmt->execute()) {
			//echo "Insert complete";
			return 1;
		} else {
			return - 1;
		}
	}
	
	/*
	 * Get all information of a user by its name
	 */
	public function read($pk_username) {
		$stmt = $this->connection->prepare( "SELECT * FROM users WHERE pk_username = ?;" );
		$stmt->bind_param( 's', $pk_username );
		
		if ($stmt->execute ()) {
			$stmt->bind_result( $pk_username);
			while ( $stmt->fetch() ) {
				$row['pk_username'] = $pk_username;
			}
			return $row;
		} else {
			//echo "0 results";
			return - 1;
		}
	}
	
	/*
	 * Get all users in the database
	 */
	public function readAll() {
		$select = "SELECT * FROM users;";
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
				//echo "</br>0 results";
			}
		} else {
			//echo "Resultset leer/nicht definiert!";
		}
	}

	/*
	 * Update the information of a user, identified by its name. // is not used
	 */
	public function update($pk_username) {
		$stmt = $this->connection->prepare ( "UPDATE users SET pk_username=? WHERE pk_username = ?;" );
		$stmt->bind_param ( 'ss', $pk_username, $pk_username );
		
		if ($stmt->execute ()) {
			//echo "Update complete";
			return 1;
		} else {
			//echo "User-Update-ERROR: " . $stmt . "<br>" . mysqli_error ( $this->connection );
			return -1;
		}
	}

	/*
	* Delete a user from database //is not used
	*/
	public function delete($pk_username){
		$stmt = $this->connection->prepare("DELETE FROM users WHERE pk_username?;");
		$stmt->bind_param ('s', $pk_username);

		if ($stmt->execute()){
			return 1;
		} else {
			//echo "User-Delete-ERROR:" . $stmt . "<br>" . mysqli_error ($this->connection);
			return -1;
		}

	}
	
}


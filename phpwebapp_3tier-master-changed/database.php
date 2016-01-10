<?php
// include database connection only once,
// it could be possible that the connection will be loaded at another DAO
include_once "db_connection.php";

// Database Layer for User
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
	 * Create a new User with pk_username
	 */
	public function create($pk_username, $userpassword) {
		echo $pk_username;
		echo $userpassword;
		echo "Katze";
		$stmt = $this->connection->prepare( "INSERT INTO users (pk_username, userpassword) VALUES (?, ?);" );
		echo "Hund";
		$stmt->bind_param( 's', $pk_username );
		echo "Esel";
		$stmt->bind_param( 's', $userpassword );
		if ($stmt->execute()) {
			echo "Insert complete";
			return 1;
		} else {
			echo "User-Create-ERROR: " . $insert . "<br>" . mysqli_error ( $this->connection );
			return - 1;
		}
	}
	
	/*
	 * Get all informations of a User by its name
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
			echo "0 results";
			return - 1;
		}
	}
	
	/*
	 * Get all Users in the Database
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
				echo "</br>0 results";
			}
		} else {
			echo "Resultset leer/nicht definiert!";
		}
	}

	/*
	 * Update the informations of a User, identified by its name.
	 */
	public function update($pk_username, $userpassword ) {
		$stmt = $this->connection->prepare ( "UPDATE users SET pk_username=? WHERE pk_username = ?;" );
		$stmt->bind_param ( 'ss', $pk_username, $pk_username );
		
		if ($stmt->execute ()) {
			echo "Update complete";
			return 1;
		} else {
			echo "User-Update-ERROR: " . $stmt . "<br>" . mysqli_error ( $this->connection );
			return -1;
		}
	}
	
}

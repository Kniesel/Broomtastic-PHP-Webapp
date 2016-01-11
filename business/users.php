<?php
// we now in presentation layer
// we will include business layer to load business logic
include("./business/business.php");

// init User Model from Business Logic
$user = new User();

// insert new user if post data exists
if(isset($_POST["pk_username"]) && $_POST["pk_username"]){
	$user->createUser($_POST["pk_username"]);
}

// now load all users
$data = $user->getAllUsers();

// prepare HTML Table
function getHTMLTable($tabledata) {
	$html = null;
	if($tabledata != null){
		$html = '<table class="tablecontent">';
		$html .= '<thead><tr>';
		$html .= '<th class="tablehead">Following users exist</th>';
		$html .= '</tr></thead>';

		foreach($tabledata as $user) {
			$html .= '<tbody><tr>';
			$html .= '<td class="tablebody">' . $user['pk_username'] . '</td>';
			$html .= '</tr></tbody>';
		}

		$html .= '</table>';
	} else {
		$html .= '<p>Sorry, there are currently no users in the database.<br>Be the first to enter! ;)</p>';
	}
	return $html;
}

?>

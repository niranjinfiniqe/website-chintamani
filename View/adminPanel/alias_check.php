<?php
	include '../../Helper/connect.php';



	//---------- For Project page----------------------

if (isset($_REQUEST['project_master']) ||  isset($_REQUEST['leasing_master']) || isset($_REQUEST['interior_master']) || isset($_REQUEST['blog_master'])  ) {
	$alias_value = array_values($_REQUEST)[0];
	$alias_key = array_keys($_REQUEST)[0];
	
	
		$sql = $link->rawQueryOne("select * from $alias_key where Alias LIKE ?", array($alias_value));

		if ($link->count == 0) {
			echo "new";
		} else {
			echo "already";
		}
	}

	
	// elseif (isset($_REQUEST['edit_project_value'])) {
	// 	$alias = $_REQUEST['edit_project_value'];
	
	// 	$sql = $link->rawQueryOne("select * from project_master where Alias LIKE ?", array($alias));

	// 	if ($link->count == 0) {
	// 		echo "new";
	// 	} else {
	// 		echo "already";
	// 	}
		
	// }



		//---------- For Lease page----------------------

// if (isset($_REQUEST['add_lease_value'])) {
// 	$alias = $_REQUEST['add_lease_value'];
	
// 		$sql = $link->rawQueryOne("select * from project_master where Alias LIKE ?", array($alias));

// 		if ($link->count == 0) {
// 			echo "new";
// 		} else {
// 			echo "already";
// 		}
// 	}
// 	elseif (isset($_REQUEST['edit_lease_value'])) {
// 		$alias = $_REQUEST['edit_lease_value'];
	
// 		$sql = $link->rawQueryOne("select * from project_master where Alias LIKE ?", array($alias));

// 		if ($link->count == 0) {
// 			echo "new";
// 		} else {
// 			echo "already";
// 		}
		
// 	}
	



// //---------- For Blog page----------------------

// if (isset($_REQUEST['alias_add_blog'])) {
// 	if ($_REQUEST['alias_add_blog'] != "" || $_REQUEST['alias_add_blog'] != 0 || $_REQUEST['alias_add_blog'] != null) {

// 		$alias = str_replace(' ', '-', $_REQUEST['alias_add_blog']);
// 		$sql = $link->rawQueryOne("select * from blog_master where Alias LIKE ?", array($alias));

// 		if ($link->count == 0) {
// 			echo "new";
// 		} else {
// 			echo "already";
// 		}
// 	}
// } else {
// 	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_blog']);
// 	$id = $_REQUEST['id'];
// 	$sql = $link->rawQueryOne("select * from blog_master where Alias LIKE ? and PK_BlogID  != ?", array($alias, $id));
// 	if ($link->count == 0) {
// 		echo "new";
// 	} else {
// 		echo "already";
// 	}
// }


// //---------- For Lease page----------------------

// if (isset($_REQUEST['alias_add_lease'])) {
// 	if ($_REQUEST['alias_add_lease'] != "" || $_REQUEST['alias_add_lease'] != 0 || $_REQUEST['alias_add_lease'] != null) {

// 		$alias = str_replace(' ', '-', $_REQUEST['alias_add_lease']);
// 		$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ?", array($alias));

// 		if ($link->count == 0) {
// 			echo "new";
// 		} else {
// 			echo "already";
// 		}
// 	}
// } else {
// 	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_lease']);
// 	$id = $_REQUEST['id'];
// 	$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ? and PK_lease  != ?", array($alias, $id));
// 	if ($link->count == 0) {
// 		echo "new";
// 	} else {
// 		echo "already";
// 	}
// }


// //---------- For Lease page----------------------

// if (isset($_REQUEST['alias_add_lease'])) {
// 	if ($_REQUEST['alias_add_lease'] != "" || $_REQUEST['alias_add_lease'] != 0 || $_REQUEST['alias_add_lease'] != null) {

// 		$alias = str_replace(' ', '-', $_REQUEST['alias_add_lease']);
// 		$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ?", array($alias));

// 		if ($link->count == 0) {
// 			echo "new";
// 		} else {
// 			echo "already";
// 		}
// 	}
// } else {
// 	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_lease']);
// 	$id = $_REQUEST['id'];
// 	$sql = $link->rawQueryOne("select * from leasing_master where Lease_Alias LIKE ? and PK_lease  != ?", array($alias, $id));
// 	if ($link->count == 0) {
// 		echo "new";
// 	} else {
// 		echo "already";
// 	}
// }


// //---------- For Interior page----------------------

// if (isset($_REQUEST['alias_add_interior'])) {
// 	if ($_REQUEST['alias_add_interior'] != "" || $_REQUEST['alias_add_interior'] != 0 || $_REQUEST['alias_add_interior'] != null) {

// 		$alias = str_replace(' ', '-', $_REQUEST['alias_add_interior']);
// 		$sql = $link->rawQueryOne("select * from interior_master where Alias LIKE ?", array($alias));

// 		if ($link->count == 0) {
// 			echo "new";
// 		} else {
// 			echo "already";
// 		}
// 	}
// } else {
// 	$alias = str_replace(' ', '-', $_REQUEST['alias_edit_interior']);
// 	$id = $_REQUEST['id'];
// 	$sql = $link->rawQueryOne("select * from interior_master where Alias LIKE ? and PK_interior  != ?", array($alias, $id));
// 	if ($link->count == 0) {
// 		echo "new";
// 	} else {
// 		echo "already";
// 	}
// }

<?php
	class navigation{

		//gets navigation columns from database
		public function getNav(){
			$dbc = connect::getDB();
			$q = "SELECT * FROM navigation";
			$nav = $db->query($q);
			return $nav;
		}

		//gets position of menus
		public function getMainNav(){
			$db = connect::getDB();
			$q = "SELECT name, page_url FROM navigation WHERE position = 'main'
			ORDER BY id";
			$nav = $db->query($q);
			return $nav;
		}
/*
		//gets position of menus
		public function getMainNav($sub){
			$db = connect::getDB();
			$q = "SELECT name, page_url FROM navigation WHERE position = '$sub'
			ORDER BY id";
			$nav = $db->query($q);
			return $nav;
		}

		//gets footer nav links
		public function getFooterNav(){
			$db = connect::getDB();
			$q = "SELECT name, page_url FROM navigation WHERE position = 'footer'
			ORDER BY id";
			$nav = $db->query($q);
			return $nav;
		}

		// FUNCTIONS FOR CMS

		public function getPage($name){
			$db = connect::getDB();
			$q  ="SELECT * FROM navigation WHERE name = '$name'
			ORDER BY id";
			$nav = $db->query($q);
			return $nav;
		}

		public function deletePage($pID){
			$db = connect::getDB();
			$q = "DELETE FROM navigation WHERE id = '$pID'";
			$row = $db->exec($q);
			return $row;
		}

		public function addPage($name, $position, $url){
			if($name!=null || $position!=null){
				$db = connect::getDB();
				$q = "INSERT INTO navigation
				(name, position, page_url)
				VALUES
				(:name, :position, :url)";
				$insert = $db->prepare($q);
				$insert->bindParam(':name', $name);
        		$insert->bindParam(':position', $position);
        		$insert->bindParam(':url', $url);
        		$row = $insert->execute();
        		return $row;
			}
		}*/

}//end of class
?>
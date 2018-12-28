<?php
include("../config.php");
if( isset($_REQUEST['action'])){
	switch($_REQUEST['action']){
		case "SendMessage":
			session_start();
			$query = $db->prepare("INSERT INTO chat SET user=?, message=?");
			$query->execute([htmlspecialchars($_SESSION['user']), htmlspecialchars($_REQUEST['message'])]);
			echo 1;
		break;
		case "getChat":
			$query = $db->prepare("SELECT * from chat");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			$chat = '';
			foreach( $rs as $r ){
				$chat .=  '<div class="siglemessage">'.'<span style="color: blue; font-weight: 600;">'.$r->user.'</span>'.': '.$r->message.'</div>';
			}
			echo $chat;
		break;
	}
}
?>

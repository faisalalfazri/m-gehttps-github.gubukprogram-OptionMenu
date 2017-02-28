<?php 
	//error_reporting(0);
	session_start();
	$path="../";
	include_once("$path/configs/db.conf");
	include_once("$path/configs/lang/lang.conf");
	$language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
    extract($lang);

	$data=array();
	if($_POST){	foreach ($_POST as $key => $value) { $$key=$mysqli->real_escape_string(htmlspecialchars(trim($value))); } }
	if($_GET){ foreach ($_GET as $key => $value) { $$key=$mysqli->real_escape_string(htmlspecialchars(trim($value))); }	}

	if(isset($request)){
		if($request=='login'){
			if($username==""){ $data['error']=$NOTIFY_USERNAME_REQUIRED; die(json_encode($data)); }
			if($password==""){ $data['error']=$NOTIFY_PASSWORD_REQUIRED; die(json_encode($data)); }
			$sql=$mysqli->query("SELECT uname,first_name,last_name,access,email,passwd FROM users WHERE uname='$username' AND passwd=MD5('$password')");
			if($sql->num_rows>0){
				$fetch=$sql->fetch_assoc();
				extract($fetch);
				$_SESSION['gps_name']=$first_name;
				$_SESSION['gps_name']=$last_name;
				$_SESSION['gps_access']=$access;
				$double_encrypt=str_rot13($passwd);
				$_SESSION['gps_auth']=$uname.$double_encrypt;

				// create session menu 
				$builder_menu="";
				$menu=$mysqli->query("SELECT mm.menu_id,mm.menu_name,mm.icon FROM main_menu mm LEFT OUTER JOIN sub_menu sm ON mm.menu_id=sm.menu_id WHERE sm.access_code IN ($access) GROUP BY mm.menu_id ORDER BY ordinal ASC") or die($mysqli->error);
		        if($menu->num_rows>0){
		            while($fetch_menu=$menu->fetch_assoc()){
		                extract($fetch_menu);
		                $builder_menu.='<li class="active treeview">
		                        <a class="waves-effect waves-dark" href="#">
		                            '.$icon.'<span> '.$menu_name.'</span><i class="icon-arrow-down"></i>
		                        </a>
		                        <ul class="treeview-menu">';
		                $submenu=$mysqli->query("SELECT * FROM sub_menu WHERE menu_id=$menu_id AND access_code IN ($access) ORDER BY sub_menu_ordinal ASC") or die($mysqli->error);
		                if($submenu->num_rows>0){
		                    while($fetch_submenu=$submenu->fetch_assoc()){
		                        extract($fetch_submenu);
		                        $serv=$server."/";
		                        if(strpos($url, "http")!==false) $serv=""; 
		                        $builder_menu.='<li class="active"><a class="waves-effect waves-dark" href="'.$serv.$url.'" target="'.$target.'">'.$icon.'<span>'.$sub_menu_name.' </span></a></li>';
		                    }
		                }
		                $builder_menu.='</ul></li>'; // close main menu 
		                
		                // for efficiency create session menu
		                $_SESSION['gps_user_menu']=$builder_menu;
		            }
		        }

				$data['success']=$NOTIFY_LOGIN_SUCCESS;
				$data['redirect']="../home";
			}else{
				$data['error']=$NOTIFY_LOGIN_ERROR;
			}
			die(json_encode($data));

		}else
		if($request=='register'){
			if($password!=$re_password){ $data['error']=$NOTIFY_PASSWORD_NOT_MATCH; die(json_encode($data)); };
			if(strpos($username, " ")){ $data['error']=$NOTIFY_USERNAME_NOT_ALLOW_SPACE; die(json_encode($data)); };
			$sql=$mysqli->query("SELECT uname FROM users WHERE uname='$username'");
			if($sql->num_rows>0){
				$data['error']=$NOTIFY_REGISTER_ERROR_USERNAME_USED;
			}else{
				$sqli=$mysqli->query("INSERT INTO users SET uname='$username',passwd=MD5('$password'),first_name='$first_name',last_name='$last_name',email='$email',status=0");
				if($mysqli->affected_rows>0){
					$data['success']=$NOTIFY_REGISTER_SUCCESS;
				}else{
					$data['error']=$NOTIFY_REGISTER_ERROR;
				}				
			}

		}else
		if($request=='verify'){
			$session=$_SESSION['Y_auth'];
			$get_passwd=str_rot13(substr($session,-32));
			$get_uname=substr($session,(strlen($session)-strlen($get_passwd)));
			$sql=$mysqli->query("SELECT access FROM users WHERE uname='$get_uname' AND passwd='$get_passwd'");
			if($sql->num_rows>0){
				$data['success']=$NOTIFY_VERIFY_AUTH_SUCCESS;
			}else{
				$data['error']=$NOTIFY_VERIFY_AUTH_ERROR;
			}
		}else
		if($request=='logout'){
			session_unset();
			session_destroy();
			$_SESSION = array();
			$data['success']=$NOTIFY_LOGOUT_SUCCESS;
			$data['redirect']="$server/login";
			header("location:$server/login");
			exit();
		}
		echo json_encode($data);
	}

	
?>
<?php
header("Access-Control-Allow-Origin: *");
session_start();

	$path="../../";
	include_once("$path/configs/db.conf");
	include_once("$path/configs/lang/lang.conf");
	$language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
    extract($lang);

	$data=array(); $q="";
	$req_datatable=false;
	if(!isset($_GET['q'])){
		$data['error']=$NOTIFY_ERROR_PARAM_Q_REQUIRED;
	}else
	if(isset($_GET['q']) && $_GET['q']!='dtTable'){
		foreach ($_GET as $key => $value) { $$key=$mysqli->real_escape_string(htmlspecialchars(trim($value))); }
	}else{
		$req_datatable=true;
	}
	//if(isset($_GET)){ foreach ($_GET as $key => $value) { $$key=$mysqli->real_escape_string(htmlspecialchars(trim($value))); }	}

	if($q=='search'){
		$param=json_decode(file_get_contents('php://input'),true);
		//$id=$mysqli->real_escape_string(htmlspecialchars($_POST['id']));
		$sWhere="";
		foreach($param as $key=>$value){ $value=$mysqli->real_escape_string(htmlspecialchars($value)); $sWhere.= "$key='$value' AND "; }
		$sWhere=trim($sWhere, " AND "); // remove last and
		$data['test']=$sWhere;
		$sql=$mysqli->query("SELECT * FROM crud WHERE $sWhere") or die($mysqli->error);
		if($sql->num_rows>0){
			$fetch=$sql->fetch_assoc();
			$data['setval']=$fetch;
		}else{
			$data['error']=$NOTIFY_DATA_NOT_FOUND;
		}
		die(json_encode($data));
	}else
	if($q=='insert'){
		if($_POST){	foreach ($_POST as $key => $value) { $$key=$mysqli->real_escape_string(htmlspecialchars(trim($value))); } }
		$check=$mysqli->query("SELECT id FROM crud WHERE name='$name' ORDER BY name DESC LIMIT 1");
		if($check->num_rows>0){
			$data['error']=$NOTIFY_DATA_AVAILABLE;
		}else{
			$mysqli->query("INSERT INTO crud SET name='$name',title='$title'");
			if($mysqli->affected_rows>0){
				$data['success']=$NOTIFY_SAVE_SUCCESS;
			}else{
				$data['error']=$NOTIFY_SAVE_FAILED;
			}
		}
		die(json_encode($data));
	}

	if($req_datatable==true){
		$aColumns = array("name","title");
	    /* Indexed column (used for fast and accurate table cardinality) */
	    $sIndexColumn = "id";
	    /* DB table to use */
	    $sTable = "crud"; 
	    # Paging
	    $sLimit = "LIMIT 4";
	    #Ordering
	    $sOrder = "";
	    $sWhere = "";
	    include("dataTable_filter.inc.php");
	    
	    $rResult = $mysqli->query("SELECT * FROM $sTable $sWhere $sOrder $sLimit") or fatal_error($mysqli->error);

	    /* Data set length after filtering */
	    $sQuery = "SELECT FOUND_ROWS()";
	    $rResultFilterTotal= $mysqli->query($sQuery) or fatal_error( 'MySQLi Error: '.$mysqli->error);
	    $aResultFilterTotal= $rResultFilterTotal->fetch_row();
	    $iFilteredTotal = $aResultFilterTotal[0];
	     
	    /* Total data set length */
	    $sQuery = "SELECT COUNT(".$sIndexColumn.") FROM $sTable";
	    $rResultTotal=$mysqli->query($sQuery) or fatal_error( 'MySQLi Error: '.$mysqli->error);
	    $aResultTotal = $rResultTotal->fetch_row();
	    //$rResultTotal = mysql_query( $sQuery, $db1 ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
	    //$aResultTotal = mysql_fetch_array($rResultTotal);
	    $iTotal = $aResultTotal[0];
	    $no=1;
	    if($rResult->num_rows>0){
	    	while ( $aRow = $rResult->fetch_assoc()){
		    	extract($aRow);
		    	$row = array();
		        $row[]=$id;
		        $row[]=$name;
		        $row[]=$title;
		        $row[]="
<button type='button' class='btn btn-inverse-primary btn-mini waves-effect waves-light' data-toggle='modal' data-target='#large-Modal' data-backdrop='static' data-keyboard='false' data-placement='center' title='' data-request='{\"id\":\"2\"}' data-original-title='Edit'>
                        <i class='icofont icofont-pencil '></i>
                    </button>
		        ";
		        $output['aaData'][] = $row;
		        $no++;
		    }
	    }else{	// return empty record
	    	$row=array();
	    	$row[]=$NOTIFY_DATA_NOT_FOUND;
	    	for($in=0;$in<=(count($aColumns)+1);$in++){
				$row[]="";
			} 
			$output['aaData'][] = $row;
		}

	    $rResult->free();
	    $mysqli->close();
	    echo json_encode( $output );
	}



?>
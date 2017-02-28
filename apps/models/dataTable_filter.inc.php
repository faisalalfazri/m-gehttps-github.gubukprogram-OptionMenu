<?php 	
		function fatal_error ( $sErrorMessage = '' ){
		    header( $_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error' );
		    $data['error']=$sErrorMessage;
		    die(json_encode($data) );
		}
	    if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ){ $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ". intval( $_GET['iDisplayLength'] );
	    }
	    if(isset( $_GET['iSortCol_0'])){
	        $sOrder = "ORDER BY  "; for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ){ if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ){ $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]." ".($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", "; } }
	        $sOrder = substr_replace( $sOrder, "", -2 );
	        if ( $sOrder == "ORDER BY" ){ $sOrder = ""; }
	    }
	    if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ){ $sWhere = "WHERE ("; for ( $i=0 ; $i<count($aColumns) ; $i++ ){ if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" ){ $sWhere .= $aColumns[$i]." LIKE '%".trim( htmlspecialchars($_GET['sSearch']))."%' OR "; } } $sWhere = substr_replace( $sWhere, "", -3 ); $sWhere .= ')';
	    }
	     
	    for ( $i=0 ; $i<count($aColumns) ; $i++ ){ if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ){ if ( $sWhere == "" ){ $sWhere = "WHERE"; }else{ $sWhere .= " AND "; } $sWhere .= $aColumns[$i]." LIKE '%".trim(htmlspecialchars($_GET['sSearch_'.$i]))."%' "; } }  
?>
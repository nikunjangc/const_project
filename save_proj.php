

<?php

if (isset($_POST)) {

	$proj_name = $_POST['proj_name'];
	$proj_type= $_POST['proj_type'];
	$proj_descrip= $_POST['proj_description'];
	$proj_start_date= $_POST['st_date'];
	$proj_comp_date= $_POST['comp_date'];
	$proj_design_team= $_POST['design_team'];
	$proj_cost= $_POST['cost'];
	$proj_design_cost= $_POST['design_cost'];
	$proj_const_cost=$_POST['cons_cost'];
	$proj_FE_cost= $_POST['fe_cost'];
	$proj_management_cost= $_POST['manag_cost'];
	$proj_priority_level= $_POST['priority_level'];
	$proj_building_value = $_POST['building_value'];
	$proj_location=$_POST['location'];
	$proj_service_provided = $_POST['service_provided'];
	$proj_status=$_POST['proj_status'];
	$proj_overview=$_POST['proj_overview'];


try{

 $mysquli= NEW MySQLi('localhost','root','','db_project_construction');
 $query_me = "call addnewproject ('$proj_name','$proj_descrip','$proj_type','$proj_start_date','$proj_comp_date','$proj_design_team','$proj_building_value','$proj_location','$proj_service_provided','$proj_design_cost','$proj_const_cost','$proj_FE_cost','$proj_management_cost','$proj_overview','$proj_status')";
   $queryadd= $mysquli->query($query_me);
   print_r($query_me);
   die();
}
catch(Exception $ex){
	echo $ex->getMessage();
}






}
    	



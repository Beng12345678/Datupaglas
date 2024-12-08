<?php
require_once('../config.php');
Class Master extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	function capture_err(){
		if(!$this->conn->error)
			return false;
		else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
			return json_encode($resp);
			exit;
		}
	}
	function save_property(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `property_details` set {$data} ";
		}else{
			$sql = "UPDATE `property_details` set {$data} where id = '{$id}' ";
		}
		$check = $this->conn->query("SELECT * FROM `property_details` where `id` ='{$id}' and delete_flag = 0 ".($id > 0 ? " and id != '{$id}' " : ""))->num_rows;
		else{
			$save = $this->conn->query($sql);
			if($save){
				$rid = !empty($id) ? $id : $this->conn->insert_id;
				$resp['status'] = 'success';
				if(empty($id))
					$resp['msg'] = "Property Details has successfully added.";
				else
					$resp['msg'] = "Property Details has been updated successfully.";
			}else{
				$resp['status'] = 'failed';
				$resp['msg'] = "An error occured.";
				$resp['err'] = $this->conn->error."[{$sql}]";
			}
			if($resp['status'] =='success')
			$this->settings->set_flashdata('success',$resp['msg']);
		}
		return json_encode($resp);
	}
	function delete_property(){
		extract($_POST);
		$del = $this->conn->query("UPDATE `property_details` set delete_flag = 1 where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Property Details has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
	function save_document(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `document_list` set {$data} ";
		}else{
			$sql = "UPDATE `document_list` set {$data} where id = '{$id}' ";
		}
		$check = $this->conn->query("SELECT * FROM `document_list` where `filename` ='{$filename}' and delete_flag = 0 ".($id > 0 ? " and id != '{$id}' " : ""))->num_rows;
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Document already exists.";
		}else{
			$save = $this->conn->query($sql);
			if($save){
				$rid = !empty($id) ? $id : $this->conn->insert_id;
				$resp['status'] = 'success';
				if(empty($id))
					$resp['msg'] = "Document has successfully Upload.";
				else
					$resp['msg'] = "Document has been updated Upload.";
			}else{
				$resp['status'] = 'failed';
				$resp['msg'] = "An error occured.";
				$resp['err'] = $this->conn->error."[{$sql}]";
			}
			if($resp['status'] =='success')
			$this->settings->set_flashdata('success',$resp['msg']);
		}
		return json_encode($resp);
	}
	function delete_document(){
		extract($_POST);
		$del = $this->conn->query("UPDATE `document_list` set delete_flag = 1 where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Document has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
	function save_taxpayer(){
		if(empty($_POST['id'])){
			$prefix = "PA-".(date('Ym'));
			$code = sprintf("%'.04d",1);
			while(true){
				$check = $this->conn->query("SELECT * FROM `taxpayer_list` where code = '{$prefix}{$code}'")->num_rows;
				if($check > 0){
					$code = sprintf("%'.04d",ceil($code)+ 1);
				}else{
					break;
				}
			}
			$_POST['code'] = $prefix.$code;
		}
		$_POST['fullname'] = strtoupper($_POST['lastname'].(!empty($_POST['suffix']) ? ' '.$_POST['suffix'] : '').' '.$_POST['firstname'].(!empty($_POST['middlename']) ? ' '.$_POST['middlename'] : ''));
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(in_array($k,array('fullname','type_of_property','tax_status', 'delete_flag'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `taxpayer_list` set {$data} ";
		}else{
			$sql = "UPDATE `taxpayer_list` set {$data} where id = '{$id}' ";
		}
		$save = $this->conn->query($sql);
		if($save){
			$pid = !empty($id) ? $id : $this->conn->insert_id;
			$resp['pid'] = $pid;
			$resp['status'] = 'success';
			if(empty($id))
				$resp['msg'] = "Taxpayer Details has successfully added.";
			else
				$resp['msg'] = "Taxpayer Details has been updated successfully.";
			$data = "";
			foreach($_POST as $k =>$v){
				if(!in_array($k,array('id','fullname','type_of_property','tax_status','delete_flag'))){
					if(!is_numeric($v))
						$v = $this->conn->real_escape_string($v);
					if(!empty($data)) $data .=",";
					$data .= " ('{$pid}', '{$k}', '{$v}') ";
				}
			}
			// echo $data;exit;
			if(!empty($data)){
				$this->conn->query("DELETE FROM `taxpayer_details` where id = '{$id}'");
				$sql2 = "INSERT INTO `taxpayer_details` (`id`, `lastname`, `firstname`, `middlename`, `birthdate`, `pob_barangay`, `pob_municipality`, `pob_province`, `email`, `contactnum`, `status`, `gender`, `add_barangay`, `add_municipality`, `add_province`, `ap_lastname`, `ap_firstname`, `ap_middlename`, `ap_barangay`, `ap_municipality`, `ap_province`, `ap_email`, `ap_conactnum`, `relationship`) VALUES {$data}";
				$save2 = $this->conn->query($sql2);
				if(!$sql2){
					$resp['status'] = 'failed';
					$resp['msg'] = "An error occured. Error: ".$this->conn->error;
					$resp['err'] = $this->conn->error."[{$sql}]";
				}
			}
		}else{
			$resp['status'] = 'failed';
			$resp['msg'] = "An error occured.";
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		if($resp['status'] =='success')
		$this->settings->set_flashdata('success',$resp['msg']);
		return json_encode($resp);
	}
	function delete_patient(){
		extract($_POST);
		$del = $this->conn->query("UPDATE `taxpayer_list` set delete_flag = 1 where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Taxpayer Details has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
	function save_user(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `user_list` set {$data} ";
		}else{
			$sql = "UPDATE `user_list` set {$data} where id = '{$id}' ";
		}
		
		$save = $this->conn->query($sql);
		if($save){
			$rid = !empty($id) ? $id : $this->conn->insert_id;
			$resp['status'] = 'success';
			if(empty($id))
				$resp['msg'] = "User Details has successfully added.";
			else
				$resp['msg'] = "User Details has been updated successfully.";
		}else{
			$resp['status'] = 'failed';
			$resp['msg'] = "An error occured.";
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		if($resp['status'] =='success')
		$this->settings->set_flashdata('success',$resp['msg']);
		return json_encode($resp);
	}
	function delete_user(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `user_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"User Details has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
}
$Master = new Master();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$sysset = new SystemSettings();
switch ($action) {
	case 'save_property':
		echo $Master->save_property();
	break;
	case 'delete_property':
		echo $Master->delete_property();
	break;
	case 'save_taxpayer':
		echo $Master->save_taxpayer();
	break;
	case 'delete_taxpayer':
		echo $Master->delete_taxpayer();
	break;
	case 'save_document':
		echo $Master->save_document();
	break;
	case 'delete_doctor':
		echo $Master->delete_document();
	break;
	case 'save_user':
		echo $Master->save_user();
	break;
	case 'delete_user':
		echo $Master->delete_user();
	break;
	default:
		// echo $sysset->index();
		break;
}
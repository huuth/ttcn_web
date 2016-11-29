<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class TypeController extends ControllerAdmin{
		public function getIndex(){
			$type= new Type();
			$data['type']=$type->getArrayType();
			$this->render('indexType',$data);
		}
		public function getEdit(){
			if (!empty($_GET['idType'])){
				$type= new Type();
				$data=$type->getTypeById($_GET['idType']);
				$this->render('editType',$data);
			}
		}
		public function editType(){
			$idType=$_GET['idType'];
			$type_name=trim($_POST['tendanhmuc']);
			$args = array('type_id' => $idType, 'type_name'=>$type_name);
			$type= new Type();
			$check=$type->editType($args);
			$converted_check=$check ? 'true' : 'false';
			$this->redirect('ctr=type&act=getIndex&load=edit&check='.$converted_check);
		}
		public function getAdd(){
			$this->render('addType');
		}
		public function addType(){
			$type_name=trim($_POST['tendanhmuc']);
			$type= new Type();
			$check=$type->addType($type_name);
			$converted_check=$check ? 'true' : 'false';
			$this->redirect('ctr=type&act=getIndex&load=add&check='.$converted_check);
		}
		public function delType(){
			$idType=$_GET['idType'];
			$type= new Type();
			$check=$type->deleteType($idType);
			$converted_check=$check ? 'true' : 'false';
			$this->redirect('ctr=type&act=getIndex&load=del&check='.$converted_check);
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>
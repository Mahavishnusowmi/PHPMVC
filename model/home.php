<?php
class homeModel{
	function __construct(){
		try{
			$this->con=new PDO("mysql:host=localhost;dbname=mvc","root","");
		}catch(PDOExection $e){
			echo $e->getMessage();
		}
	}
	function page($id){
		$sql="select name,des from data where id='$id'";
		$stmt=$this->con->prepare($sql);
		$stmt->execute();
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$arr=$data['0'];
		return $arr;
	}
}
?>
<?php

namespace Modal;

use Entity\Manager;
use PDO;

class PostManager extends Manager{

	public function viewAll(){
		$cnx = $this->cnx();
		$stmt = $cnx->prepare("SELECT * FROM post");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Entity\Post');
		$post = $stmt->fetchAll();
		return $post;
				
	}

	public function view($id){
		$cnx = $this->cnx();
		$stmt = $cnx->prepare("SELECT * FROM post WHERE id = :id");
		var_dump($id);
		$id = intval($id);
		var_dump($id);
		$stmt->bindParam(':id',$id, PDO::PARAM_INT);
		$stmt->execute();
		/*$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Entity\Post');*/
		$post = $stmt->fetch();
		var_dump($post);
		return $post;
	}
}
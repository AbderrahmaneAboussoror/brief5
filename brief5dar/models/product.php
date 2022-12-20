<?php

class product{
    static public function getProds(){
        $stmt = DB::connecter()->prepare("SELECT * from product");
        $stmt->execute();
        return $stmt ->fetchAll();
    }

    static public function getProd($id){
        $stmt = DB::connecter()->prepare("SELECT * from product where idP = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt ->fetch();
    }

    static public function addProd($data){
        $stmt = DB::connecter()->prepare("INSERT INTO product(titre, image, description, prix) values(:t, :im, :des, :prix)");
        $stmt->bindParam(":t", $data['titre']);
        $stmt->bindParam(":im", $data['image']);
        $stmt->bindParam(":des", $data['description']);
        $stmt->bindParam(":prix", $data['prix']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }

    static public function updateProd($data){
        $stmt = DB::connecter()->prepare("UPDATE product
        SET titre = :t, image = :im, description = :des, prix = :prix
        WHERE idP = :idP");
        $stmt->bindParam(":idP", $data['idP']);
        $stmt->bindParam(":t", $data['titre']);
        $stmt->bindParam(":im", $data['image']);
        $stmt->bindParam(":des", $data['description']);
        $stmt->bindParam(":prix", $data['prix']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }

    static public function deleteProd($idP){
        $stmt = DB::connecter()->prepare("DELETE FROM product WHERE idP= $idP");
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }
}
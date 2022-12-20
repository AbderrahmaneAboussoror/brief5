<?php

class admin{
    static public function getAdmins(){
        $stmt = DB::connecter()->prepare("SELECT * from utilisateur");
        if($stmt->execute()){
            return $stmt->fetchAll();
        }else{
            return 'error';
        }
    }

    static public function getAdmin($id){
        $stmt = DB::connecter()->prepare("SELECT * from utilisateur where Id = $id");
        if($stmt->execute()){
            return $stmt->fetch();
        }else{
            return 'error';
        }
    }
}
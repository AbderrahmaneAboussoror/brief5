<?php
class Instances{
    static public function addProdInstance(){
        if(isset($_POST['submit'])){
            $newpod = new prodController();
            $newpod->addProduct();
            unset($_POST['submit']);
          }
    }

    static public function getAllProdInstance(){
        $prodClass = new prodController();
        return $prodClass->getAllprod();
    }

    static public function deleteProdInstance(){
        if(isset($_POST['id'])){
            $prodClass = new prodController();
            $prodClass->deleteProduct();
        }
    }

    static public function editProdInstance(){
        if(isset($_POST['submit'])){
            $prodClass = new prodController();
            $prodClass->editProduct();
            unset($_POST['submit']);
        }
    }

    static public function getProdInstance(){
        if(isset($_POST['id'])){
            $prodClass = new prodController();
            return $prodClass->getprod();
        }
    }

    static public function adminInstance(){
        if(isset($_POST['submit'])){
            $ad = new adminController();
            $ad->fetchAdmin();
            unset($_POST['submit']);
        }
    }
}
?>
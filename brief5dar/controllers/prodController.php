<?php

class prodController{
    public function getAllprod(){
        $prod = product::getProds();
        return $prod;
    }

    public function getprod(){
        $prod = product::getProd($_POST['id']);
        return $prod;
    }

    public function addProduct(){
            $data = array(
                'titre' => $_POST['titre'],
                'image' => $_POST['image'],
                'description' => $_POST['desc'],
                'prix' => $_POST['prix']
            );
            $resultat = product::addProd($data);
            if($resultat != 'ok'){
                echo ($resultat);
            }
            else{
                header('location:dashboard');
            }
    }

    public function deleteProduct(){
        $resultat = product::deleteProd($_POST["id"]);
        if($resultat != 'ok'){
            echo ($resultat);
        }
        else{
            header('location:dashboard');
        }
    }

    public function editProduct(){
        $data = array(
            'idP' => $_POST['id'],
            'titre' => $_POST['titre'],
            'image' => $_POST['image'],
            'description' => $_POST['desc'],
            'prix' => $_POST['prix']
        );
        $resultat = product::updateProd($data);
        if($resultat != 'ok'){
            echo ($resultat);
        }
        else{
            header('location:dashboard');
        }
    }
}



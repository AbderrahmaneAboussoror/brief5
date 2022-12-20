<?php

class homeController{
    public function index($page){
        include('views/'. $page .'.php');
    }
    public function index2($page){
        include('views/dashboardAdmin/'. $page .'.php');
    }
}
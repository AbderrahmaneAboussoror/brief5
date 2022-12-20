 <?php
 require_once('./views/includes/header.php');
 require_once('./autoload.php');
 require_once('./controllers/homeController.php');

 $home = new homeController();

 $pages = ['home', 'about', 'contact', 'Gallery', 'login', 'prodInfo'];

 $adminPages = ['dashboard', 'add', 'delete', 'update'];

 if(isset($_GET['page'])){
    if(in_array($_GET['page'], $pages)){
        $home->index($_GET['page']);
    }
    elseif(in_array($_GET['page'], $adminPages)){
        if($_SESSION['login'])
            $home->index2($_GET['page']);
        else
            header('location:login');
    }
     else{
        include('views/includes/404.php');
     }
 }
 else $home->index('home');
 

//  require_once('./views/includes/footer.php');
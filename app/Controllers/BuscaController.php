<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class BuscaController
{

    private const ITENS_PER_PAGE = 5;

    public function index()
    {

        if(isset($_GET['search'])){
            $total_itens = App::get('database')->countWithSearch('posts', 'titulo', $_GET['search']);
            $total_pages = ceil($total_itens/BuscaController::ITENS_PER_PAGE);

            if(
            isset($_GET['page']) 
            && filter_var($_GET['page'], FILTER_VALIDATE_INT) 
            && $_GET['page'] > 0 
            && $_GET['page'] <= $total_pages
            )
                $page = $_GET['page'];
            else 
                $page = 1;

            $skip = ($page - 1) * BuscaController::ITENS_PER_PAGE;

            $posts = App::get('database')->selectAllWhithSearch('posts', 'titulo', $_GET['search'], BuscaController::ITENS_PER_PAGE, $skip);
            $search = "&search=" . $_GET['search'];
            return view('site/busca', compact('posts', 'page', 'total_pages', 'search'));
        }
        
        $total_itens = App::get('database')->count('posts');
        $total_pages = ceil($total_itens/BuscaController::ITENS_PER_PAGE);

        if(
        isset($_GET['page']) 
        && filter_var($_GET['page'], FILTER_VALIDATE_INT) 
        && $_GET['page'] > 0 
        && $_GET['page'] <= $total_pages
        )
            $page = $_GET['page'];
        else 
            $page = 1;

        $skip = ($page - 1) * BuscaController::ITENS_PER_PAGE;

        $posts = App::get('database')->selectAll("posts", BuscaController::ITENS_PER_PAGE, $skip);
        return view('site/busca', compact('posts', 'page', 'total_pages'));

    }




}
<?php

namespace app;


use app\controller\ProductController;
use app\controller\ProductHistoryController;
use app\controller\UsersController;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET')
        {
            switch ($view)
            {
                case 'product':

                    if ($action == 'new')
                        (new ProductController())->create();
                    elseif ($action == 'list')
                        (new ProductController())->list();

                    break;

                case 'product-history':
                        if ($action == 'new')
                            (new ProductHistoryController())->create();
                        elseif ($action == 'list')
                            (new ProductHistoryController())->list();

                        break;

                case 'new-user':
                    if ($action == 'new')
                        (new UsersController())->create();
                    elseif ($action == 'list')
                        (new UsersController())->list();

                    break;
            }
        }
        elseif ($method == 'POST')
        {
            switch ($view)
            {
                case 'product':

                    if ($action == 'create')
                        (new ProductController())->store();

                    break;

                case 'product-history':

                    if ($action == 'create')
                        (new ProductHistoryController())->store();

                    break;

                case 'new-user':

                    if ($action == 'create')
                        (new UsersController())->store();

                    break;
            }
        }

        //echo "Bakery online!";
    }
}
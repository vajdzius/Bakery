<?php

namespace app;

use app\model\Product_history;

class Product_historyController
{
        public function create() : string
     {
        return file_get_contents('app/view/product_history/new.php');
    }
    public function store() : string
    {
                //Product::create($_POST);
                //(new Product())->create($_POST);

                $model = new Product_history();
                $model ->create($_POST);

                //Redirected to list
                 header('Location:?view=product_history&action=list');
    }

    public function list()
            {
                $model = new Product_history();
                $result = $model->list();

                $header= '';
                $data='';

                foreach ($result as $item)
                    {
                        if( $header== '')
                            {
                               foreach ($item as $key => $value)
                                    {
                                        $header .='<th>' . $key . '</th>';
                                    }
            }
            $data .= '<tr>';

            foreach ($item as $key => $value)
                            {
                                $data .='<td>' . $value . '</td>';
                            }
            $data .='</tr>';

        }
        echo "<table class='table-secondary'>";
        echo "<thead>";
        echo "<tr>";
        echo $header;
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo $data;
        echo "</tbody>";
        echo "</table>";

    }

}
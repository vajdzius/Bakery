<?php

namespace app\controller;

use app\model\Product;
use app\model\ProductHistory;

class ProductHistoryController
{
        public function create()
        {
            $template = new TemplateEngineController('new-product-history');

            $value = $this->getProductOptions();

            $template->set('productOptions', $value);
            $template->echoOutput();
        }

    private function getProductOptions(): string
    {
        $result = (new Product())->list();
        $options = '';

        foreach ($result as $value){

            $options .= '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
        }
        return $options;
    }

    public function store()
    {
        $model = new ProductHistory();
        $model->create($_POST);

        // Redirecting to LIST
        header('Location: ?view=product-history&action=list');
        exit();
    }

    public function list()
    {
        $model = new ProductHistory();

        $result = $model->list();

        $header = '';
        $data = '';

        foreach ($result as $item) {

            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';
                }
            }

            $data .= '<tr>';

            foreach ($item as $key => $value) {
                $data .= '<td>' . $value . '</td>';
            }

            $data .= '</tr>';
        }

    }
}
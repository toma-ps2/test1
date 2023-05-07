<?php

class shopProdDeleteProductsController extends waJsonController
{
    public function execute()
    {
        $this->getStorage()->close();

        $product_id = waRequest::post('product_ids', [], waRequest::TYPE_ARRAY_INT);
        $presentation_id = waRequest::post('presentation_id', null, waRequest::TYPE_INT);
        if (!$presentation_id) {
            $all_product_ids = $product_id;
        } else {
            $presentation = new shopPresentation($presentation_id, true);
            $options = [];
            if ($presentation->getFilterId() > 0) {
                $options['prepare_filter'] = $presentation->getFilterId();
                $options['exclude_products'] = $product_id;
            }
            $collection = new shopProductsCollection('', $options);
            $all_product_ids = $presentation->getProducts($collection, [
                'fields' => ['id'],
                'offset' => max(0, waRequest::post('offset', 0, waRequest::TYPE_INT)),
            ]);
            $all_product_ids = array_keys($all_product_ids);
        }

        $this->deleteProducts($all_product_ids);
    }

    public function deleteProducts($product_ids)
    {
        if (!empty($product_ids)) {
            $product_model = new shopProductModel();

            $delete_ids = $product_model->filterAllowedProductIds($product_ids);
            $not_allowed_ids = array_diff($product_ids, $delete_ids);
            $this->response['deleted'] = $delete_ids;
            $this->response['not_allowed'] = $not_allowed_ids;
            $delete_log_action = count($delete_ids) > 1 ? 'products_delete' : 'product_delete';
            $delete_ids_with_name = $product_model->select('id, name')->where('id IN (?)', implode(',', $delete_ids))->fetchAll('id');
            $this->logAction($delete_log_action, $delete_ids_with_name);
            return $product_model->delete($delete_ids);
        }
        return false;
    }
}
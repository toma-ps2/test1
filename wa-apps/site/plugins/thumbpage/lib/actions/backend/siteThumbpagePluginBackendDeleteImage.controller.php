<?php

class siteThumbpagePluginBackendDeleteImageController extends waJsonController
{

    public function execute()
    {
        try {
            $pageId = waRequest::post('page_id');
            $pageModel = new sitePageModel();
            $page = $pageModel->getById($pageId);
            $image_path = wa()->getDataPath('plugins/thumbpage/images/', 'site');
            $name = $page['thumbpage'];

            if ($name && file_exists($image_path . $name)) {
                if (@!unlink($image_path . $name)) {
                    $this->response['message'] = 'Ошибка удаления ' . $image_path . $name;
                } else {
                    $this->response['message'] = 'Изображение удалено';
                }
            }
            $pageModel->updateById($pageId, array('thumbpage' => ''));
        } catch (Exception $e) {
            $this->setError($e->getMessage());
        }
    }

}

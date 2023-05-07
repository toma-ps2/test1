<?php

/**
 * @author Artem Prichinenko <aprichinenko@yandex.ru>
 */
class siteThumbpagePluginSettingsAction extends waViewAction
{

    public function execute()
    {
        $settings = siteThumbpagePlugin::getPluginSettings();

        $default = array(
            'status' => 0,
        );

        $this->view->assign('settings', array_merge($default, $settings));
    }

}

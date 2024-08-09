<?php

namespace Kanboard\Plugin\RetornarTask;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        global $retornarTaskConfig;

        if (file_exists('plugins/RetornarTask/config.php'))
        {
            require_once('plugins/RetornarTask/config.php');
        }

        $this->hook->on('template:layout:css', array('template' => 'plugins/RetornarTask/Assets/css/btn_retornado.css'));

        $this->template->hook->attach('template:task:details:bottom', 'RetornarTask:task/retornado_button', [
            'retornarTaskConfig' => $retornarTaskConfig
        ]);
    }

    public function getPluginName()
    {
        return 'RetornarTask';
    }

    public function getPluginDescription()
    {
        return t('Adiciona botão que muda a cor da task para a cor retornado ao cliente.');
    }

    public function getPluginAuthor()
    {
        return 'Mateus S.S';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Massnt/RetornarTask.git';
    }
}


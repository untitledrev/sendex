<?php

/**
 * The home manager controller for sendex.
 *
 */
class sendexHomeManagerController extends modExtraManagerController
{
    /** @var sendex $sendex */
    public $sendex;


    /**
     *
     */
    public function initialize()
    {
        $this->sendex = $this->modx->getService('sendex', 'sendex', MODX_CORE_PATH . 'components/sendex/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['sendex:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('sendex');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->sendex->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/sendex.js');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        sendex.config = ' . json_encode($this->sendex->config) . ';
        sendex.config.connector_url = "' . $this->sendex->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "sendex-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="sendex-panel-home-div"></div>';

        return '';
    }
}
<?php

class sendexItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'sendexItem';
    public $classKey = 'sendexItem';
    public $languageTopics = ['sendex'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('sendex_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('sendex_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'sendexItemCreateProcessor';
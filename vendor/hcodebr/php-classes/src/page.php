<?php

namespace Rodolfo;

use Rain\Tpl;

class Page
{

    private $tpl;
    private $defaults = [
        "data" => [],
    ];

    private $options = [];

    public function __construct($opts = array())
    {

        $this->options = array_merge($this->defaults, $opts);

        // config
        $config = array(
            "tpl_dir" => $_SERVER["DOCUMENT_ROOT"] . "/views/",
            "cache_dir" => $_SERVER["DOCUMENT_ROOT"] . "/views/cache/",
            "debug" => true,
        );

        Tpl::configure($config);

        $this->tpl = new Tpl;

        $this->setData($this->options["data"]);

        $this->tpl->draw("header");
    }

    private function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }

    }

    public function setTpl($name, $data = array(), $returnHTML = false)
    {
        $this->setData($data);

        return $this->tpl->draw($name, $returnHTML);

        $arr = array(1, 2, 3, 4);
        foreach ($arr as &$value) {
            $value = $value * 2;
        }

    }

    public function __destruct()
    {
        $this->tpl->draw("footer");

    }
}

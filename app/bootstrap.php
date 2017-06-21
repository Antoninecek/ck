<?php

namespace app;

use app\modely\pobocka;

class Bootstrap {

    private $kontroler;
    private $akce;
    private $parametry = array();

    public function __construct() {
        $this->parsujUrl();
        $this->routuj();
    }

    private function routuj() {
        if ($this->kontroler) {
            $trida = "\\app\\kontrolery\\" . $this->kontroler;
            $soubor = "app/kontrolery/" . $this->kontroler . ".php";

            if (is_readable($soubor)) {
                $handler = new $trida();

                if ($this->akce && method_exists($handler, $this->akce)) {
                    $handler->{$this->akce}($this->parametry);
                    return true;
                } elseif (!$this->akce) {
                    $handler->index();
                    return true;
                } else {
                    $handler = new kontrolery\Error();
                    $handler->error404();
                    return true;
                }
            } else {
                $handler = new kontrolery\Error();
                $handler->error404();
                return true;
            }
        } else {
            $handler = new kontrolery\Home();
        }
        $handler->index();
    }

    private function parsujUrl() {
        $url = $_SERVER['REQUEST_URI'];
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $pos = strpos($url, ROOT_DIR);
        if ($pos !== false) {
            $url = substr_replace($url, '', $pos, strlen(ROOT_DIR));
        }
        $parsovanaUrl = parse_url($url);

        $path = array_filter(explode('/', !empty($parsovanaUrl['path']) ? $parsovanaUrl['path'] : null));

        if (empty($path[0])) {
            $this->kontroler = null;
        } else if (count($path) > 2) {
            $this->kontroler = 'Error';
        } else {
            $this->kontroler = $path[0];
        }

        $this->akce = !empty($path[1]) ? $path[1] : null;

        if (!empty($parsovanaUrl['query'])) {
            preg_match_all('([\w]+=[\w\d]+)', $parsovanaUrl['query'], $par);
            foreach ($par[0] as $p) {
                $this->parametry[explode('=', $p)[0]] = explode('=', $p)[1];
            }
        }
    }


}


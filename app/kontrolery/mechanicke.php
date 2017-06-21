<?php
/**
 * Created by PhpStorm.
 * User: František
 * Date: 22.06.2017
 * Time: 1:08
 */

namespace app\kontrolery;

use libs\Kontroler;
use libs\Pohled;

class mechanicke extends Kontroler {

    public function __construct() {
        $this->setSablonu('app/sablony/vychozi');
        $this->setPripojeni();
    }

    public function index() {
        $this->sablona->set('titulek', 'hello world');
        $content = new Pohled('app/pohledy/mechanickeuvod');
        $this->sablona->set('content', $content->rendruj());
        echo $this->sablona->rendruj();
    }

    public function pyramida() {
        $this->sablona->set('titulek', 'hello world');
        $content = new Pohled('app/pohledy/mechanickepyramida');
        $this->sablona->set('content', $content->rendruj());
        echo $this->sablona->rendruj();
    }

}
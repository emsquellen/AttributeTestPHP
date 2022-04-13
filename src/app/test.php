<?php

namespace App;

use Framework\Controller;
use Framework\Route;
use Templating\Template;

class Test extends Controller {

    #[Route('/')]
    public function index() {
        Template::renderTemplate('base.html');
    }
}

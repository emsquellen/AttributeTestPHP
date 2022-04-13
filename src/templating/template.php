<?php

namespace Templating;

/**
 * Compiles a template into a html string.
 *
 * @author emsquellen
 */
class Template {
    /**
     * @var string
     */
    private $template;

    /**
     * @var array
     */
    private $data;

    /**
     * @param string $template
     * @param array $data
     */
    public function __construct(string $url, array $data = []) {
        $this->template =  file_get_contents("templates/$url");
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function render(): string {
        $template = $this->template;
        return $template;
    }
    
    public static function renderTemplate(string $template, array $data = []) {
        $template = new Template($template, $data);
        echo $template->render();
    }
}

<?php 

namespace Core;

class Controller {

    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlMetodo;

    public function __construct()
    {
        if( !empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->urlConjunto = explode("/", $this->url);
            var_dump($this->urlConjunto); 
        } else {

        }
    }
}

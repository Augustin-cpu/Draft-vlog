<?php

class View{
    private $template;

    public function __construct($template)
    {
        $this->template = $template;        
    }
    public function render($donnees = null)
    {
        $template = $this->template;
        if(file_exists('template/Auth/'.$template.'.php')){
            ob_start();
            include_once('template/Auth/'.$template.'.php');
            $contentPage = ob_get_clean();
            include_once('template/Auth/layout/layout.php');
        }else{
            ob_start();
            include_once('template/'.$template.'.php');
            $contentPage = ob_get_clean();
            include_once('template/layout/layout.php');
        }
    }
}
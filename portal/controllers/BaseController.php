<?php

/**
 * Class BaseController
 *
 * @property string $layout view layout
 * @property string $content rendered view content
 */
class BaseController
{
    public $layout = 'default';
    public $viewContentClass = 'content';
    public $content;

    public function redirect($url)
    {
        if (empty($url)) {
            $url = Application::getConfig('defaultController') . DIRECTORY_SEPARATOR .'index';
        }
        header('Location: ' . $url);
    }

    public function render($view, array $environment = [])
    {
        $controllerFolder = lcfirst(str_replace('Controller','', get_called_class()));
        extract($environment);

        ob_start();
        $viewPath = 'template' . DIRECTORY_SEPARATOR . $controllerFolder .DIRECTORY_SEPARATOR. $view . '.php';
        if (is_file($viewPath) === false) {
            throw new Exception('cannot render view file : ' . $viewPath);
        }
        include $viewPath;
        $this->content = ob_get_clean();

//        return $this->content;
//        ob_start();
        $layoutPath = 'template'. DIRECTORY_SEPARATOR .'layouts'. DIRECTORY_SEPARATOR . $this->layout . '.php';
        if (is_file($layoutPath) === false) {
            throw new Exception('cannot render layout file : ' . $layoutPath);
        }
        include $layoutPath;
//        $layout = ob_get_clean();
//
//        return $layout;
    }
}
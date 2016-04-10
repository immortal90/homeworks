<?php


class Router
{
    /**uri
     * @var
     */
    public static $url;

    public  function setUrl($url)
    {
        self::$url = $url;
    }

    public  function delegate()
    {
        $url = trim(self::$url, '/\\');
        $args = [];
        $isStandardArgs = strstr($url, '?');
        $standardArgs = [];

        //get args
        if ($isStandardArgs) {
            $arr = explode('?', $url);
            $url = $arr[0];
            $standardArgsUrl = $arr[1];
            $standardArgsArr = explode('&', $standardArgsUrl);
            foreach($standardArgsArr as $order => $item) {
                $standardArgs[$order] = $item;
            }

            unset($arr);
        }
        //get url
        if (empty($url)) {
            $arr = [
                Application::getConfig('defaultController'),
                'index',
            ];
        } else {
            $arr = explode('/', $url);
        }

        $controller = $arr[0];
        if (isset($arr[1])) {
            $action = 'action' . ucfirst($arr[1]);
        } else {
            $action = 'actionIndex';
        }


        if (count($arr) > 2 || $isStandardArgs) {
            foreach ($arr as $order => $item) {
                if ($order > 1) {
                    $args[] = $item;
                }
            }
            array_merge($args, $standardArgs);
        }

        $nameController = ucfirst($controller) . 'Controller';
        $pathController = __DIR__ . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR .'controllers' . DIRECTORY_SEPARATOR . $nameController . '.php';

        if (!is_file($pathController)) {
            throw new Exception('file not exist', 404);
        }

        $reflection = new ReflectionClass($nameController);

        $controllerClassName = $reflection->getName();

        $controller = new $controllerClassName();

        if (!is_callable(array($controller, $action))) {

            throw new Exception('Error , action not exist');
        }

        //productControllerObject->actionIndex()
        call_user_func_array(array($controller, $action), $args);
    }
}
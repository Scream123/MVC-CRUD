<?php

/**
 *Router
 */
class Router
{
    //saving routes of array
    private $routes;

    public function __construct()
    {
        //path to route of files
        $routesPath = ROOT . '/config/routes.php';
        //getting routes from file
        $this->routes = include($routesPath);
    }

    /**
     * return @string query
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * Method for handling the request
     */
    public function run()
    {
        // Get the query string
        $uri = $this->getURI();

        //Check for the presence of such a request in the routes array (routes.php)
        foreach ($this->routes as $uriPattern => $path) {
            // Compare $ uriPattern and $ uri
            if (preg_match("~$uriPattern~", $uri)) {


                // Get the inner path from the outer one according to the rule.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Define controller, action, parameters
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Include the file of the controller class
                $controllerFile = ROOT . '/controllers/' .
                    $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                // Create an object, call a method (i.e. action)
                $controllerObject = new $controllerName;

                /* Call the required method ($ actionName) on a specific
                * class ($ controllerObject) with given ($ parameters) parameters
                */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }

            }
        }
    }

}
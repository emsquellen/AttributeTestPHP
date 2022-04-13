<?php

namespace Framework;

class Router {
    private static ?Router $instance = null;

    private array $routes = [];

    public function addRoute(string $route, callable $callback) {
        $this->routes[$route] = $callback;
    }

    public function _run() {
        $route = $this->getRoute();
        if (isset($this->routes[$route])) {
            $this->routes[$route]();
        } else {
            echo '<title>Page Not Found: 404</title><div style="display:flex;justify-content:center;align-items:center;"><h1>Page Not Found: 404</h1></div>';
        }
    }

    private function getRoute() {
        $route = $_SERVER['REQUEST_URI'];
        return $route;
    }

    public function getRoutes() {
        return $this->routes;
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Router();
        }
        return self::$instance;
    }

    private function __construct() {
    }

    public static function run() {
        $router = self::getInstance();
        $router->_run();
    }

    public static function registerController(Controller $controller) {
        $router = self::getInstance(); // Get the current router instance

        $reflection = new \ReflectionClass($controller); // Get the class using reflection
        $methods = $reflection->getMethods(\ReflectionMethod::IS_PUBLIC); // Get all public methods
        foreach ($methods as $m) { // Loop through all methods
            foreach ($m->getAttributes() as $a) { // Loop through all attributes
                if ($a->getName() == Route::class) { // If the attribute is a Route
                    $router->addRoute($a->getArguments()[0], [$controller, $m->getName()]); // Add the route
                }
            }
        }
    }
}

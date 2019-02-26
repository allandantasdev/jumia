<?php
namespace App\Config;

class Router
{
    private $routes = [
        '' 		    => ['GET' => 'App\\Controllers\\HomeController::index'],
        '/'		    => ['GET' => 'App\\Controllers\\HomeController::index'],
        'countries' => ['GET' => 'App\\Controllers\\CountryController::getAll'],
    ];

    public function resolve(string $url)
    {
        if (empty($this->routes[$url][$_SERVER['REQUEST_METHOD']]))
        {
            http_response_code(404);
            echo '404 - Not Found';
            return;
        }

        call_user_func($this->routes[$url][$_SERVER['REQUEST_METHOD']]);
    }
}

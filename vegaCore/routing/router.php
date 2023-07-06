<?php
declare(strict_types=1);

    /**
     * Cette méthode du routeur lui permet de récupérer les routes dont l'application
     * attend la réception via la méthode "GET".
     *
     * @param string $route_uri
     * @param array $route_action
     * 
     * @return void
     */
    function get(string $route_uri, array $route_action) : void
    {
        collectRoutes("GET", $route_uri, $route_action);
    }


    /**
     * Cette méthode du routeur lui permet de récupérer les routes dont l'application
     * attend la réception via la méthode "POST".
     *
     * @param string $route_uri
     * @param array $route_action
     * 
     * @return void
     */
    function post(string $route_uri, array $route_action) : void
    {
        collectRoutes("POST", $route_uri, $route_action);
    }


    /**
     * Cette méthode du routeur lui permet de collectionner les routes dont l'application atend la réception,
     * en prenant soin de les trier en fonction de leur méthode d'envoi
     *
     * @param string $httpMethod
     * @param string $route_uri
     * @param array $route_action
     * 
     * @return void
     */
    function collectRoutes(string $httpMethod, string $route_uri, array $route_action) : void
    {
        global $routes;
        $route = [];

        $route[] = $route_uri;
        $route[] = $route_action;

        $routes[$httpMethod][] = $route;
    }


    function run() : ?array
    {
        global $routes;

        foreach ($routes[$_SERVER['REQUEST_METHOD']] as $route) 
        {
            var_dump($route); die();
        }
    }
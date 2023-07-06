<?php

declare (strict_types = 1);

/**
     * -------------------------------------------------------------------
     *                        Le noyau
     * 
     * 
     * Ses rôles : 
     *      - Soumettre la requête du client
     *      - Récupérer la réponse correspondante
     *      - Retourner cette réponse au contrôleur frontal
     *      
     * 
     * @author Bléza PLEGNON <bleza.plg@gmail.com>
     * @version 1.0.0
     * @copyright Copyright (c) 2023 Bléza PLEGNON
     * -------------------------------------------------------------------
     */

     
    /**
     * Cette méthode du noyau lui permet de soumettre la requête du client pour traitement 
     * Puis, récupérer la réponse correspondante afin de la retourner au contrôleur frontal.
     *
     * @return string
     */
    function handleRequest(): string
    {

        // Chargement du routeur
        require ROOT . "/vegaCore/routing/router.php";

        // Chargement des routes
        require ROOT . "/config/routes.php";

        // Exécution du routeur
        run();
        
    }
    
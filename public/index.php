<?php
/**
     * -------------------------------------------------------------------
     *                        Bienvenue sur Vega
     * 
     * Ce fichier représente le contrôleur frontal
     * https://en.wikipedia.org/wiki/Front_controller
     * 
     * Ses rôles : 
     *      - Recevoir la requête du client
     *      - Amorcer l'application
     *      - Charger le noyau de l'application
     *      - Demander au noyau de traiter la requête du client
     *      - Récupérer la réponse correspondante
     *      - L'afficher au client
     * -------------------------------------------------------------------
     */

     // Reception de la requête du client
     // Toutes les données se trouvent dans la variable superglobale $_SERVER.

     // Amorçage de l'application (charger les fichiers de configuration)
     require __DIR__ ."/../config/bootstrap.php";
<?php

namespace AppBundle\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient as GuzzleClient;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SwapiService extends GuzzleClient {
	public function __construct($uri)
    {
        $client = new Client(array(
            'base_uri' => $uri,
            "headers" => array(
                "Content-type" => "application/json; charset=utf-8"
            ),
        ));

        // définition des requètes supportées par notre service
        $description = new Description([
            "name" => 'Star Wars API',
            "description" => "Star Wars API",
            // list des opérations supportées
            "operations" => array_merge(
                $this->getPlanetOperations($uri)
            ),
            "models" => [
                "jsonResponse" => [
                    "type" => "object",
                    "additionalProperties" => [
                        "location" => "json"
                    ]
                ]
            ]
        ]);

        parent::__construct($client, $description);
    }

    protected function getPlanetOperations($uri) {
    	return array(
            "getPlanets" => array(
                "httpMethod" => "GET",
                // l'uri est ajoutée à notre base_uri définie par défaut
                "uri" => $uri . "planets/",
                "responseModel" => "jsonResponse"
            )
        );
    }
}
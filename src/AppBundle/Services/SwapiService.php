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
                "uri" => $uri . "planets/",
                "responseModel" => "jsonResponse"
            ),
            "getPlanet" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "planets/{id}",
                "parameters" => array(
                	"id" => array(
                		"required" => true,
                        "location" => "uri"
                	)
                ),
                "responseModel" => "jsonResponse"
            ),
            "getPeoples" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "people/",
                "responseModel" => "jsonResponse"
            ),
            "getPeople" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "people/{id}",
                "parameters" => array(
                	"id" => array(
                		"required" => true,
                        "location" => "uri"
                	)
                ),
                "responseModel" => "jsonResponse"
            ),
            "getStarships" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "starships/",
                "responseModel" => "jsonResponse"
            ),
            "getStarship" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "starships/{id}",
                "parameters" => array(
                	"id" => array(
                		"required" => true,
                        "location" => "uri"
                	)
                ),
                "responseModel" => "jsonResponse"
            ),
            "getVehicles" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "vehicles/",
                "responseModel" => "jsonResponse"
            ),
            "getVehicle" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "vehicles/{id}",
                "parameters" => array(
                	"id" => array(
                		"required" => true,
                        "location" => "uri"
                	)
                ),
                "responseModel" => "jsonResponse"
            ),
            "getSpecies" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "species/",
                "responseModel" => "jsonResponse"
            ),
            "getSpecie" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "species/{id}",
                "parameters" => array(
                	"id" => array(
                		"required" => true,
                        "location" => "uri"
                	)
                ),
                "responseModel" => "jsonResponse"
            ),
            "getFilms" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "films/",
                "responseModel" => "jsonResponse"
            ),
            "getFilm" => array(
                "httpMethod" => "GET",
                "uri" => $uri . "films/{id}",
                "parameters" => array(
                	"id" => array(
                		"required" => true,
                        "location" => "uri"
                	)
                ),
                "responseModel" => "jsonResponse"
            ),
        );
    }
}
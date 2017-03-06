<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("default/index.html.twig")
     */
    public function indexAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/starships", name="starships")
     * @Template("default/starships.html.twig")
     */
    public function starshipsAction(Request $request)
    {
        $swapi = $this->get('swapi');

        $data = $swapi->getStarships(array("page" => 2));

        dump($data);die;

        return array(
            'data' => $data,
        );
    }

    /**
     * @Route("/people", name="people")
     * @Template("default/people.html.twig")
     */
    public function peopleAction(Request $request)
    {
        $swapi = $this->get('swapi');

        $data = $swapi->getStarships(array("page" => 2));

        dump($data);die;

        return array(
            'data' => $data,
        );
    }
}

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
        $swapi = $this->get('swapi');

        $test = $swapi->getFilm(array("id" => 4));
        // $crawl = nl2br($test['opening_crawl']);
        $order   = array("\r\n", "\n", "\r");
        $crawl = str_replace("\r\n\r\n", '<br><br>', $test['opening_crawl']);
        // dump($crawl);die;
        // $crawl = '<p>' . preg_replace('#(<br>[\r\n]+){2}#', '</p><p>', $crawl) . '</p>';

        return array(
            'data' => $test,
            'crawl' => $crawl
        );
    }

    /**
     * @Route("/starships", name="starships")
     * @Template("default/starships.html.twig")
     */
    public function starshipsAction(Request $request)
    {
        $swapi = $this->get('swapi');

        $data = $swapi->getPlanets(array("page" => 4));

        dump($data);die;

        return array(
            'data' => $data,
        );
    }
}

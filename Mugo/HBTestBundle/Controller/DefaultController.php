<?php

namespace Mugo\HBTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public static function getRandomItems()
    {
        $items = array();
        for($x = 0; $x < 1000; $x++)
        {
            $items[] = array( 'title' => 'Item ' . $x );
        }
        shuffle($items);
        return $randomItems = array_slice($items, 0, 5);
    }
    public function indexAction()
    {
        return $this->render( 'MugoHBTestBundle:Default:index.html.twig', array( 'items' => self::getRandomItems() ) );
    }

    public function ajaxAction()
    {
        $response = new JsonResponse( array( 'items' => self::getRandomItems() ) );
        $response->setPublic();
        return $response;

    }
}


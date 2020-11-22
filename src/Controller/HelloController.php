<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /* protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }*/
    /**
     * @Route("/hello/{prenom?world}",name="hello", methods={"GET"})
     */
    public function hello($prenom, LoggerInterface $logger)
    {
        $logger->info("Mon message de log");
        return new Response("hello $prenom");
    }
}

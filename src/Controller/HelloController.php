<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/hello/{prenom?world}",name="hello", methods={"GET"})
     */
    public function hello($prenom, LoggerInterface $logger)
    {
        $logger->info("Mon message de log");
        $tva = $this->calculator->calcul(100);

        return new Response("hello $prenom $tva");
    }
}

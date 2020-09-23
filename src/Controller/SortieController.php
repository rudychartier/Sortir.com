<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    /**
     * @Route("/sortie", name="sortie_list")
     */
    public function list()
    {
        // recup list en bdd
        return $this->render('sortie/list.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }

    /**
     * @Route("/sortie", name="sortie_add")
     */
    public function add()
    {
        return $this->render('sortie/add.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Sortie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route ("/sortie", name="sortie_")
 */

class SortieController extends AbstractController
{

    /**
     * @Route("/list", name="list")
     */
    public function list(EntityManagerInterface $em)
    {
        // recup sorties  en bdd
        $sortieRepo = $em->getRepository(Sortie::class);
        $sorties = $sortieRepo->find();
        return $this->render('sortie/list.html.twig', ["sorties"=>$sorties]);
    }

    /**
     * @Route("/detail/{id}", name="detail", requirements={"id":"\d+"})
     */
    // methode seulement get à spécifier
    public function detail($id,EntityManagerInterface $em,Request $request)
    {
        // recup detail sorties en bdd
        $sortieRepo = $em->getRepository(Sortie::class);
        $sorties =$sortieRepo->find($id);
        return $this->render('sortie/detail.html.twig', ["sorties"=>$sorties]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add()
    {
        //créer la sortie , traiter + sauvergarder dans la bdd

        return $this->render('sortie/add.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }

  /*  /**
     * @Route("/publish", name="publish")
     */
   /* public function publish()
    {
        //publier la sortie
        return $this->render('sortie/publish.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }
*/
    /**
     * @Route("/delete", name="delete")
     */
    public function delete()
    {
        //supprimer la sortie
        return $this->render('sortie/delete.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }

    /**
     * @Route("/cancel", name="cancel")
     */
    public function cancel ()
    {
        //annuler la sortie
        return $this->render('sortie/cancel.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }


}

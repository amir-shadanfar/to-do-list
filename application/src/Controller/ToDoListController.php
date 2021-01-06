<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/create", name="create_task",methods={"POST"})
     */
    public function create(): Response
    {
        exit('create');
    }

    /**
     * @Route("/switch-status/{id}", name="switch_status")
     */
    public function switchStatus($id): Response
    {
        exit('switchStatus ' . $id);
    }

    /**
     * @Route("/delete/{id}", name="delete_task")
     */
    public function delete($id): Response
    {
        exit('delete ' . $id);
    }
}

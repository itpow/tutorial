<?php
namespace App\Controller;
use App\Entity\Tutorial;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NginxController extends AbstractController
{
    // This is an action, the function that gives you the content for
    //your page
    public function index()
    {
        $tutorial = $this->getDoctrine()
            ->getRepository(Tutorial::class)
            ->find(1);

        return $this->render('base.html.twig', ['tutorial' => $tutorial]);
    }
}
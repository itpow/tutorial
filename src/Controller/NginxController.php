<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NginxController extends AbstractController
{
    // This is an action, the function that gives you the content for
    //your page
    public function index()
    {
        return $this->render('base.html.twig', []);
    }
}
<?php
namespace App\Controller;
use App\Entity\ContentsData;
use App\Entity\Tutorial;
use App\Entity\TutorialContents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GitController extends AbstractController
{

    public function index()
    {
        return $this->redirect('nginx');
    }

    public function tutorial()
    {
        return $this->render('git.html.twig', []);
    }
}
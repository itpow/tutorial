<?php
namespace App\Controller;
use App\Entity\ContentsData;
use App\Entity\Tutorial;
use App\Entity\TutorialContents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{

    public function index()
    {

        return $this->render('index/index.html.twig');
    }
}
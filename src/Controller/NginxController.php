<?php
namespace App\Controller;
use App\Entity\ContentsData;
use App\Entity\Tutorial;
use App\Entity\TutorialContents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NginxController extends AbstractController
{
    const NGINX_TUTORIAL = 1;
    // This is an action, the function that gives you the content for
    //your page
    public function index()
    {

        $tutorial = $this->getDoctrine()
            ->getRepository(Tutorial::class)
            ->find(self::NGINX_TUTORIAL);

        $tutorialContents = $this->getDoctrine()
            ->getRepository(TutorialContents::class)
            ->findBy(['tutorial_id' => self::NGINX_TUTORIAL]);

        $contentData = $this->getDoctrine()
            ->getRepository(ContentsData::class)
            ->findBy(['tutorial_contents_id' => self::NGINX_TUTORIAL]);

        return $this->render('base.html.twig', [
            'tutorial' => $tutorial,
            'tutorialContents' => $tutorialContents,
            'contentData' => $contentData[0] ?? null
        ]);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnviroment )
    {
       // $html = $twigEnviroment->render('question/homepage.html.twig');
       // return new Response($html);
        // Example for services ^^^

        return $this->render('question/homepage.html.twig');
    }


    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        $answers = [
            'make sure your cat is sitting still' ,
            'try better, or throw cat away',
            'do something else'
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
        'question' => ucwords(str_replace('-', ' ',$slug)),
            'answers' => $answers,
        ]);
    }
}
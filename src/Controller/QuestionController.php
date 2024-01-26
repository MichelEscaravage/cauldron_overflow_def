<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('test');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'make sure your cat is sitting still' ,
            'try better, or throw cat away',
            'do something else'
        ];

        return $this->render('question/show.html.twig', [
        'question' => ucwords(str_replace('-', ' ',$slug)),
            'answers' => $answers,
        ]);

    }
}
<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\Routing\Annotation\Route;

/**
 * Class StudentController
 * @package App\Controller
 * @Route ("/scolarite", name="scol")
 */
class StudentController extends AbstractController
{
    /**
     * @return Response
     * @Route  ("/hello", name="index")
     */

    public function index()
    {
        return new Response("hello mes étudiants");
    }
}
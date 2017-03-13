<?php

namespace LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;




class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $request = file_get_contents('http://blackbooks.my/app_dev.php/books2');
        /*$j = json_decode($request->request->get())*/
        echo $request;
        return $this->render('LibraryBundle:Default:index.html.twig', array (
            'j' => $request,
    ));
    }
}

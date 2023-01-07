<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // Rutas con notaciones
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola Mundo con Symfony 4'
        ]);
    }

    public function animales($nombre, $apellidos)
    {
        $title = "Bienvenido a la pagina de animales";
        $animales = array('perro', 'gato', 'paloma', 'rata');
        $aves = array(
            'tipo' => 'palomo',
            'color' => 'gris',
            'edad' => 4,
            'raza' => 'colillano');

        return $this->render('home/animales.html.twig', [
            'title' => $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'aves' => $aves
        ]);

    }

    public function redirigir()
    {
//        return $this->redirectToRoute('index', [], 301);
//        return $this->redirectToRoute('animales', [
//            'nombre' => 'Carlos',
//            'apellidos' => '1'
//        ]);

        return $this->redirect('https://victorroblesweb.es/academy');
    }
}

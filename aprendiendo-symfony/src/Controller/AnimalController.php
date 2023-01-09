<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;

class AnimalController extends AbstractController
{

    public function index(): Response
    {
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
        $animales = $animal_repo->findAll();

        // Sacar un unico registro
//        $animal = $animal_repo->findOneBy([
//            'tipo' => 'Avestruz'
//        ]);

        // Sacar todos los registros que cumplan
        $animal = $animal_repo->findBy([
            'raza' => 'americana'],
            // Ordenacion por parametro
            [
                'id' => 'DESC'
            ]
        );

        var_export($animal);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales

        ]);
    }

    public function save()
    {
        // Guardar en la tabla de base de datos

        // Cargo el em
        $entityManager = $this->getDoctrine()->getManager();

        // Creo el objeto y le doy valores
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('verde');
        $animal->setRaza('africana');

        // Guardar objeto en doctrine
        $entityManager->persist($animal);

        // Almacenar datos en la tabla / guardar en la bd
        $entityManager->flush();

        return new Response('El animal guardado tiene el id: ' . $animal->getId());
    }

    public function animal($id)
    {
        // Cargar respositorio
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        // Consulta
        $animal = $animal_repo->find($id);

        // Comprobar si el resultado es correcto
        if (!$animal) {
            $message = 'El animal no existe';
        } else {
            $message = 'Tu animal elegido es: ' . $animal->getTipo() . ' - ' . $animal->getRaza();
        }
        return new Response($message);
    }
}

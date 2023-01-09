<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;


class AnimalController extends AbstractController
{
    public function crearAnimal()
    {
        $animal = new Animal();
        $form = $this->createFormBuilder($animal)
            ->setAction($this->generateUrl('animal_save'))
            ->setMethod('POST')
            ->add('tipo', TextType::class)
            ->add('color', TextType::class)
            ->add('raza', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

        return $this->render('animal/crear-animal.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
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

        // Query builder
        $qb = $animal_repo->createQueryBuilder('a')
            // Forma de where
//            ->andWhere("a.raza = 'americana'")
            // Con parametros
//            ->andWhere("a.raza = :raza")
//            ->setParameter('raza', 'americana')
            ->orderBy('a.id', 'DESC')
            ->getQuery();

        $resultset = $qb->execute();

//        var_export($animal);


        // DQL
        $dql = "select a from App\Entity\Animal a where a.raza = 'americana'";
//        $dql = "select a from App\Entity\Animal a order by a.id desc";
        $query = $em->createQuery($dql);
        $resultset = $query->execute();


        // SQL
        $connection = $this->getDoctrine()->getConnection();
        $sql = 'SELECT * FROM animales ORDER BY id asc';
        $prepare = $connection->query($sql);
        $resultset = $prepare->fetchAll(); //fetch - fetchAssociative
//        var_dump($resultset);


        // Usando repositorio
        $animals = $this->getDoctrine()->getRepository(Animal::class)->findByRaza('desc');
        var_export($animals);
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

    public function animal(Animal $animal)
    {
//        // Cargar respositorio
//        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
//
//        // Consulta
//        $animal = $animal_repo->find($id);

        // Comprobar si el resultado es correcto
        if (!$animal) {
            $message = 'El animal no existe';
        } else {
            $message = 'Tu animal elegido es: ' . $animal->getTipo() . ' - ' . $animal->getRaza();
        }
        return new Response($message);
    }

    public function update($id)
    {
        // Cargar doctrine
        $doctrine = $this->getDoctrine();

        // Cargar entityManager
        $em = $doctrine->getManager();

        // Cargar repo de entidad Animal
        $animal_repo = $em->getRepository(Animal::class);

        // Find para conseguir el objeto
        $animal = $animal_repo->find($id);

        // Comprobar si el objeto me llega
        if (!$animal) {
            $message = 'El animal no existe en la base de datos';
        } else {

            // Asignarle los valores al objeto
            $animal->setTipo("Perro $id");
            $animal->setColor('rojo');

            // Persistir en doctrine
            $em->persist($animal);

            // Guardar en la bd
            $em->flush();

            $message = 'Has actualizado el animal ' . $animal->getId();

        }

        // Respuesta
        return new Response($message);
    }

    public function delete(Animal $animal)
    {
        var_dump($animal);

        if ($animal && is_object($animal)) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($animal);
            $em->flush();

            $message = 'Animal borrado correctamente';
        } else {
            $message = 'Animal no encontrado';
        }

        return new Response($message);
    }
}

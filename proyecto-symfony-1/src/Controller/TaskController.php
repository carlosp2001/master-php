<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{

    public function index(): Response
    {
        // Prueba de entidades y relaciones
        $em = $this->getDoctrine()->getManager();


//        $task_repo = $this->getDoctrine()->getRepository(Task::class);
//        $tasks = $task_repo->findAll();
//
//        foreach ($tasks as $task) {
//            // Imprimir el nombre del usuario mediante las relaciones del ORM
//            echo $task->getUser()->getEmail() . ': ' . $task->getTitle() . "<br>";
//        }

        $user_repo = $this->getDoctrine()->getRepository(User::class);
        $users = $user_repo->findAll();

        foreach ($users as $user) {
            // Imprimir el nombre del usuario mediante las relaciones del ORM
            echo "<h1>{$user->getName()} {$user->getSurname()}</h1>";

            foreach ($user->getTasks() as $task) {
            // Imprimir el nombre del usuario mediante las relaciones del ORM
            echo $task->getTitle() . "<br>";
        }
        }

        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }
}

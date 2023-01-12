<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TaskType;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskController extends AbstractController
{

    public function index(): Response
    {
        // Prueba de entidades y relaciones
        $em = $this->getDoctrine()->getManager();


        $task_repo = $this->getDoctrine()->getRepository(Task::class);
        $tasks = $task_repo->findBy([], ['id'=>'DESC']);
//
//        foreach ($tasks as $task) {
//            // Imprimir el nombre del usuario mediante las relaciones del ORM
//            echo $task->getUser()->getEmail() . ': ' . $task->getTitle() . "<br>";
//        }

        $user_repo = $this->getDoctrine()->getRepository(User::class);
        $users = $user_repo->findAll();

//        foreach ($users as $user) {
//            // Imprimir el nombre del usuario mediante las relaciones del ORM
//            echo "<h1>{$user->getName()} {$user->getSurname()}</h1>";
//
//            foreach ($user->getTasks() as $task) {
//            // Imprimir el nombre del usuario mediante las relaciones del ORM
//            echo $task->getTitle() . "<br>";
//        }
//        }

        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
        ]);
    }

    public function detail(Task $task)
    {
        if (!$task) {
            return $this->redirectToRoute('tasks');
        }

        return $this->render('task/detail.html.twig', [
            'task' => $task
        ]);
    }

    public function creation(Request $request, UserInterface $user)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted()  && $form->isValid()) {
            $task->setCreatedAt(new \DateTime('now'));
            $task->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirect(
                $this->generateUrl('task_detail', [
                    'id' => $task->getId()
                ])
            );

        }
        return $this->render('task/creation.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function myTasks(UserInterface $user)
    {
        $tasks = $user->getTasks();

        return $this->render('task/my-tasks.html.twig', [
            'tasks'=>$tasks
            ]);
    }
}

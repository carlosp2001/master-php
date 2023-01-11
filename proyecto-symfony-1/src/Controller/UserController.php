<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\User;
use App\Form\RegisterType;

class UserController extends AbstractController
{

    public function register(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        // Crear formulario
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        // Rellenar el objeto con los datos del formulario
        $form->handleRequest($request);

        // Comprobar si el form se ha enviado
        if ($form->isSubmitted() && $form->isValid()) {

            // Modificando el objeto para guardarlo
            $user->setRole('ROLE_USER');
//            $date_now = (new \DateTime())->format('d-m-Y H:i:s');

            $user->setCreatedAt(new \DateTime('now'));

            // Cifrando la contraseña
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);

//            var_export($user);

            // Guardar usuario en la bd
            $em =  $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('tasks');
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
            ]);
    }

    public function login(AuthenticationUtils $autenticationUtils)
    {
        $error = $autenticationUtils->getLastAuthenticationError();

        $lastUsername = $autenticationUtils->getLastUsername();

        return $this->render('user/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername
        ]);
    }
}

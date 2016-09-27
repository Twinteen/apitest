<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Controller\FormController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ResponseController extends FOSRestController
{
    /**
     * @Route("/test/all/", name="select_all")
     */
    public function apiSelectUserAll()
    {
        $userManager = $this->get('fos_user.user_manager');

        $allUsers = $userManager->findUsers();
        if (empty($allUsers))
            return $this->json('There are no users');

        return $this->json($allUsers);
    }

    /**
     * @Route("/test/user/{id}", name="select_single")
     */
    public function apiSelectUserByID($id)
    {
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->findUserBy(array('id'=>$id));

        if($user === null)
            return $this->json('There is no such user');

        return $this->json($user);
    }

    /**
     * @Route("/test/user", name="create")
     * @Method("POST")
     */
    public function apiCreateUser(Request $request)
    {
        $content = $request->getContent();

        if (empty($content))
            return $this->json('Fill Form pls');

        $parsedContent  = json_decode($content,true);

        if ($parsedContent["form_controller[username]"] == '' || $parsedContent["form_controller[email]"] == ''
            || $parsedContent["form_controller[password]"] == '')
            return $this->json('Fill all inputs pls');

        $userManager = $this->get('fos_user.user_manager');
        $usernameCheck = $userManager->findUserByUsername($parsedContent['form_controller[username]']);
        $emailCheck = $userManager->findUserByEmail($parsedContent['form_controller[email]']);

        if ($usernameCheck !== null || $emailCheck !== null)
            return $this->json('Such User already exist');

        $user = new User();
        $user->setEmail($parsedContent['form_controller[email]']);
        $user->setUsername($parsedContent['form_controller[username]']);
        $user->setPassword($parsedContent['form_controller[password]']);
        $user->setEmailCanonical(mb_strtolower($parsedContent['form_controller[email]'], 'UTF-8'));
        $user->setUsernameCanonical(mb_strtolower($parsedContent['form_controller[username]'], 'UTF-8'));

        $create = $this->getDoctrine()->getManager();
        $create->persist($user);
        $create->flush();

        $userCheckSave = $userManager->findUserBy(array('username'=> $parsedContent['form_controller[username]'],
                                                         'email' => $parsedContent['form_controller[email]']
                                                         ));

        if ($userCheckSave === null)
            return $this->json('Failed to save ' . $parsedContent['form_controller[username]']);


        return $this->json('success');
    }

    /**
     * @Route("/test/form/", name="edit")
     */
    public function apiCreate()
    {
        $user = new User();
        $form = $this->createForm(FormController::class, $user);

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }


}
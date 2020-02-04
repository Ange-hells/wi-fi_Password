<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Password_wifi extends AbstractController
{
    public function index()
    {
        $user_first_name = "hello";
        $userNotification = ['...', '...'];
        
        return $this->render('Index.html.twig', [
            'user_first_name' => $user_first_name,
            'notification' => $userNotification
        ]);
    }
}
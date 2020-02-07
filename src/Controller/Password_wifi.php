<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Password_wifi extends AbstractController
{
    public function mdp()
    {
        $password = Password_wifi::getMdp(1);
        $userNotification = ['...', '...'];
        
        return $this->render('mdp.html.twig', [
            'password' => $password,
            'notification' => $userNotification
        ]);
    }

    public function getMdp($durer)
    {
        if $durer == 1{
            $password = "salut"
        }elseif $durer == 2{
            $password = "hello"
        }else {
            $password = "hi"
        };
        return $password;
    }
}
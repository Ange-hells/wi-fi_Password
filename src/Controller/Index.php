<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ClesRepository;
use Doctrine\ORM\Mapping as ORM;

class Index extends AbstractController
{
    public function index()
    {
        // $user_first_name = "hello";
        
        return $this->render('Index.html.twig', [
            // 'user_first_name' => $user_first_name,
        ]);
    }

    public function mdp($temp)
    {
        $password = $this->getMdp($temp);
        
        return $this->render('mdp.html.twig', [
            'password' => $password,
        ]);
    }

    public function getMdp($durer)
    {
        if ($durer == 1){
            $password = $this->getMdp1h(1);
        }elseif ($durer == 2){
            $password = "hello";
        }else{
            $password = "hi";
        }
        return $password;
    }


    public function getMdp1h($id)
    {
        $password = getDoctrine()
            ->getRepository(Cles::class)
            ->getKey($id);
        //get un mdp de 1h
        //dellete this mdp de 1h
        return $password;
    }

    public function getMdp2h()
    {
        //get un mdp de 2h
        //dellete this mdp de 2h
        return $password;
    }

    public function getMdp3h()
    {
        //get un mdp de 3h
        //dellete this mdp de 3h
        return $password;
    }


}
<?php

namespace App\Controller;

use App\Entity\Centre;
use App\Entity\Provincia;
use App\Entity\Cicle;
use App\Entity\Regim;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Expr\Cast\Object_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function PHPUnit\Framework\returnSelf;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/listarCentros", name="ej1")
     */
    public function ej1(): Response
    {
        $Centres = $this->getDoctrine()->getManager()->getRepository(Centre::class)->findAll();

        return $this->render('home/listarCentros.html.twig', [
            'centres' => $Centres
        ]);
    }


    /**
     * @Route("/centrosValencia", name="ej2")
     */
    public function ej2(): Response
    {
        $centres = $this->getDoctrine()
            ->getManager()
            ->getRepository(Centre::class)
            ->findBy(['provincia' => $this
                ->getDoctrine()
                ->getRepository(Provincia::class)->findOneBy(['nom'=>'Prov. de València'])]);

        return $this->render("home/listaValencia.html.twig", ['centres' => $centres]);
       
    }
    
    /**
     * @Route("/ciclos", name="ej3")
     */
    public function ej3(): Response
    {
        $cicles = $this->getDoctrine()
            ->getManager()
            ->getRepository(Cicle::class)
            ->findAll();
            return $this->render("home/Ciclos.html.twig",['ciclos' => $cicles]);
    }


    /**
     * @Route("/centrosDAM",name="ej4")
     */
    public function ej4(): Response
    {
        $cicle = $this->getDoctrine()->getManager()->getRepository(Cicle::class)->findOneBy(['codi' => "DAM"]);
        $centros = $cicle->getCentre();

        return $this->render("home/centrosDAM.html.twig",['centros' => $centros]);
    }
    
    /**
     * @Route("/centro18",name="ej5")
     */
    public function ej5(): Response
    
    {
        $centro = $this->getDoctrine()
            ->getManager()
            ->getRepository(Centre::class)
            ->findOneBy(['id' => '18']);
            
        return $this->render("home/centro18.html.twig", ['centro' => $centro]);
    
    }


    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/insertarCentro",name="ej6")
     */
    public function ej6(): Response{


        $existe = $this->getDoctrine()->getManager()->getRepository(Centre::class)->findOneBy(["centre" => "IES LA MAR"]); 
        
        if($existe === null){


            $regim = $this->getDoctrine()->getManager()->getRepository(Regim::class)->find(1);
            $dam = new Cicle();
            $dam = $this->getDoctrine()->getManager()->getRepository(Cicle::class)->find(3);
            $daw = $this->getDoctrine()->getManager()->getRepository(Cicle::class)->find(4);
            $smx = $this->getDoctrine()->getManager()->getRepository(Cicle::class)->find(1);

        

            $provincia = new Provincia();
            $provincia =  $this->getDoctrine()->getManager()->getRepository(Provincia::class)->find(3);

            $centro = new Centre();
            $centro->setProvincia($provincia);
            $centro->setRegim($regim);
            $centro->setCentre("IES LA MAR");
            $centro->setCodi("03013339");
            $centro->setDireccio("Av. AUGUSTA, 2");
            $centro->setLocalitat("03730 - XÁBIA");
            $centro->setTelefon(966428205);
            $centro->addCicle($dam);
            $centro->addCicle($daw);
            $centro->addCicle($smx);

            $this->entityManager->persist($centro);
            $this->entityManager->flush();
            return new Response("<h1>Centro insertado</h1>");
        }else{
            
            return new Response("<h1>Ese centro ya esta en la base de datos</h1>");
        }
        
       


    }


    /**
     * @Route("/actualizarTelefono",name="ej7")
     */
    public function ej7(): Response{
        $centre = $this->getDoctrine()->getManager()->getRepository(Centre::class)->findOneBy(["codi"=>"46017675"]);
        $centre->setTelefon("678678112");
        $this->entityManager->flush();
        return new Response("<h1>Telefono del centro IES LA SENIA actualizado por: ".$centre->getTelefon()."</h1>");
    }

    /**
     * @Route("/eliminarIESMAR",name="ej8")
     */
    public function ej8(): Response{
        

        $centro = $this->getDoctrine()->getManager()->getRepository(Centre::class)->findOneBy(["centre" => "IES LA MAR"]); 
        
        if($centro === null){
        
            return new Response("<h1>El centro no se encuantra en la base de datos</h1>");
        
        }else{

            $this->entityManager->remove($centro);
            $this->entityManager->flush();
            
        }



        return new Response("<h1>Se ha eliminado el centro IES LA MAR</h1>");
    }
}

<?php

namespace App\Controller;


use App\Form\Centre1Type;
use App\Entity\Centre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/centre")
 */
class CentreController extends AbstractController
{
    /**
     * @Route("/", name="app_centre_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $centres = $entityManager
            ->getRepository(Centre::class)
            ->findAll();

        return $this->render('centre/index.html.twig', [
            'centres' => $centres,
        ]);
    }

    /**
     * @Route("/new", name="app_centre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $centre = new Centre();
        $form = $this->createForm(Centre1Type::class, $centre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($centre);
            $entityManager->flush();

            return $this->redirectToRoute('app_centre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('centre/new.html.twig', [
            'centre' => $centre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_centre_show", methods={"GET"})
     */
    public function show(Centre $centre): Response
    {
        return $this->render('centre/show.html.twig', [
            'centre' => $centre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_centre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Centre $centre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Centre1Type::class, $centre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_centre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('centre/edit.html.twig', [
            'centre' => $centre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_centre_delete", methods={"POST"})
     */
    public function delete(Request $request, Centre $centre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$centre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($centre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_centre_index', [], Response::HTTP_SEE_OTHER);
    }
}

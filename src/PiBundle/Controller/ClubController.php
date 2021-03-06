<?php

namespace PiBundle\Controller;

use PiBundle\Entity\Club;
use PiBundle\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Club controller.
 *
 * @Route("club")
 */
class ClubController extends Controller
{
    /**
     * Lists all club entities.
     *
     * @Route("/", name="club_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clubs = $em->getRepository('PiBundle:Club')->findAll();
        $user = $this->getUser();
        if($user !=null && in_array("ROLE_ADMIN",$user->getRoles()))
        {
            return $this->render('club/index.html.twig', array(
                'clubs' => $clubs,
            ));
        }
        else
        {
            if($user!=null)
            {
                $i = $em->getRepository('PiBundle:Inscription')->findBy(array('user'=>$this->getUser()));
                $inss = array();
                foreach ($i as $ii)
                {
                    array_push($inss,$ii->getClub()->getId());
                }
            }
            else
                $inss =array();
            return $this->render('club/indexUsers.html.twig', array(
                'clubs' => $clubs,
                'inss' => $inss,
            ));
        }
    }

    /**
     * Creates a new club entity.
     *
     * @Route("/new", name="club_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $club = new Club();
        $form = $this->createForm('PiBundle\Form\ClubType', $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();

            return $this->redirectToRoute('club_show', array('id' => $club->getId()));
        }

        return $this->render('club/new.html.twig', array(
            'club' => $club,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a club entity.
     *
     * @Route("/{id}", name="club_show")
     * @Method("GET")
     */
    public function showAction(Club $club)
    {
        $deleteForm = $this->createDeleteForm($club);

        return $this->render('club/show.html.twig', array(
            'club' => $club,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing club entity.
     *
     * @Route("/{id}/edit", name="club_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Club $club)
    {
        $deleteForm = $this->createDeleteForm($club);
        $editForm = $this->createForm('PiBundle\Form\ClubType', $club);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('club_edit', array('id' => $club->getId()));
        }

        return $this->render('club/edit.html.twig', array(
            'club' => $club,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a club entity.
     *
     * @Route("/{id}", name="club_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Club $club)
    {
        $form = $this->createDeleteForm($club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($club);
            $em->flush();
        }

        return $this->redirectToRoute('club_index');
    }

    /**
     * Creates a form to delete a club entity.
     *
     * @param Club $club The club entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Club $club)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('club_delete', array('id' => $club->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Creates a inscription.
     *
     * @Route("/inscription/{id}", name="inscription")
     * @Method({"GET", "POST"})
     */
    public function inscription($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ins = new Inscription();
        $ins->setClub($em->getRepository('PiBundle:Club')->find($id));
        $ins->setUser($this->getUser());
        $em->persist($ins);
        $em->flush();
        return $this->redirectToRoute('club_index');
    }

    /**
     * Creates a new club entity.
     *
     * @Route("/desinscription/{id}", name="desinscription")
     * @Method({"GET", "POST"})
     */
    public function desinscription($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club=$em->getRepository('PiBundle:Club')->find($id);
        $ins = $em->getRepository('PiBundle:Inscription')->findOneBy(array('user'=>$this->getUser(),'Club'=>$club));
        $em->remove($ins);
        $em->flush();
        return $this->redirectToRoute('club_index');
    }
}

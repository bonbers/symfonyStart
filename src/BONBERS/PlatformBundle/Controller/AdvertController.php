<?php

namespace BONBERS\PlatformBundle\Controller;

use BONBERS\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    
    public function indexAction($page)
    {
              if ($page < 1 ) {
           throw new NotFoundHttpException('Page"'.$page.'"inexistante.');
       }
       
       // On fixe le nombre d'annonces par page à 3
       $nbPerPage = 3;
       
       // On récupère la liste de toute les annonces avec findAll()
       
        $listAdverts = $this->getDoctrine()
                ->getManager()
                ->getRepository('BONBERSPlatformBundle:Advert')
                ->getAdverts()
                ;
       
       // On récupère notre objet Paginator
       $listAdverts = $this->getDoctrine()
               ->getManager()
               ->getRepository('BONBERSPlatformBundle:Advert')
               ->getAdverts($page, $nbPerPage)
               ;
       
       // On calcul le nombre total de pages qui retourne le nombre total d'annonces
       $nbPages = ceil(count($listAdverts) / $nbPerPage);
       
       // Si la page n'existe pas, on retourne une 404
       if ($page -> $nbPages) {
           throw $this->createNotFoundException("La page ".$page." n'existe pas");
       }
      
    // Affichage
       return $this->render('BONBERSPlatformBundle:Advert:index.html.twig', array(
           'listAdverts' => $listAdverts,
           'nbPages'   => $nbPages,
           'page'    => $page,
           ));
    }

    public function viewAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // On récupère une seule annonce avec la méthode find($id)
    $advert = $em->getRepository('BONBERSPlatformBundle:Advert')->find($id);
    
    // $advert est une instance de BONBERS\PlatformBundle\Entity\Advert
    // null si l'id $id n'existe pas, d'où le if :
    if (null === $advert) {
        throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }
    
    // Récupération de la liste des candidatures de l'annonce
    $listApplications = $em
            ->getRepository('BONBERSPlatformBundle:Application')
            ->findBy(array('advert' => $advert))
            ;
    
    // Récupération des AdvertSkill de l'annonce
    $listAdvertSkills = $em
            ->getRepository('BONBERSPlatformBundle:AdvertSkill')
            ->findBy(array('advert' => $advert))
            ;
   
    return $this->render('BONBERSPlatformBundle:Advert:view.html.twig', array(
      'advert'              => $advert,
      'listApplications' => $listApplications,
      'listAdvertSkills'  => $listAdvertSkills, 
    ));
    }
    
    public function menuAction($limit)
    {
        $em = $this->getDoctrine->getManager();
       
        $listAdverts = $em->getRepository('BONBERSPlatformBundle:Advert')->findBy(
                array(),                           // Pas de critère
                array('date' => 'desc'),   // On trie par date décroissante
                $limit,                            // On sélectionne $limit annonce
                0                                   // A partir du premier
                );
                
        return $this->render('BONBERSPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
    }
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice','Annonce bien enregistrée.');
            return $this->redirectToRoute('bonbers_platform_view', array('id' => $advert->getId()));
        }
        return $this->render('BONBERSPlatformBundle:Advert:add.html.twig');
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $advert = $em->getRepository('BONBERSPlatformBundle:Advert')->find($id);
        
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas");
        }
        
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifié');
           return $this->redirectToRoute('bonbers_platform_view', array('id' => $advert->getId()));
        }
       
       return $this->render('BONBERSPlatformBundle:Advert:edit.html.twig', array(
           'advert' => $advert
       ));
    }
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $advert = $em->getRepository('BONBERSPlatformBundle:Advert')->find($id);
        
        if(null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }
        
        // Boucle sur les catégories de l'annonce pour les supprimer
        
        foreach ($advert->getCategories() as $category) {
            $advert->removeCategory($category);
        }
        
        $em->flush();
        
        return $this->render('BONBERSPlatformBundle:Advert:delete.html.twig');
    }
   
}
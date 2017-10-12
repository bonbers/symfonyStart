<?php

namespace BONBERS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
        $listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title' => 'Offre de stage webdesigner',
        'id' => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
    );
       if ($page < 1 ) {
           throw new NotFoundHttpException('Page"'.$page.'"inexistante.');
       }
      
       return $this->render('BONBERSPlatformBundle:Advert:index.html.twig', array(
           'listAdverts' => $listAdverts
           ));
    }

    public function viewAction($id)
    {
    $advert = array(
      'title'   => 'Recherche développpeur Symfony2',
      'id'      => $id,
      'author'  => 'Alexandre',
      'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
      'date'    => new \Datetime()
    );

    return $this->render('BONBERSPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert

    ));
    }
    
    public function menuAction($limit)
    {
        $listAdverts = array(
      array('id' => 2, 'title' => 'Recherche développeur Symfony'),
      array('id' => 5, 'title' => 'Mission de webmaster'),
      array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );
        return $this->render('BONBERSPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listAdverts' => $listAdverts
    ));
    }
    public function addAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice','Annonce bien enregistrée.');
            return $this->redirectToRoute('bonbers_platform_view', array('id' => 5));
        }
        return $this->render('BONBERSPlatformBundle:Advert:add.html.twig');
    }

    public function editAction($id, Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifié');
           return $this->redirectToRoute('bonbers_platform_view', array('id' => 5));
        }
        
            $advert = array(
           'title' => 'Recherche développeur Symfony',
           'id'    => $id,
           'author' => 'Alexandre',
           'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon..',
           'date' => new \Datetime()
       );
       
       return $this->render('BONBERSPlatformBundle:Advert:edit.html.twig', array(
           'advert' => $advert
       ));
    }
    
    public function deleteAction($id)
    {
        return $this->render('BONBERSPlatformBundle:Advert:delete.html.twig');
    }
}
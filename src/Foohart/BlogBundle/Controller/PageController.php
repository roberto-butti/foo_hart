<?php

namespace Foohart\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    
  public function indexAction() {
    $slug = "XX";
    return $this->render('FoohartBlogBundle:Page:index.html.twig', array('slug' => $slug));
  }


}

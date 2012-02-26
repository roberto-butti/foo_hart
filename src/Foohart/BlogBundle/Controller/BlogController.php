<?php

namespace Foohart\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    
  public function blogAction() {
    $slug = "XX";
    return $this->render('FoohartBlogBundle:Blog:index.html.twig', array('slug' => $slug));
  }
  public function indexAction() {
    $slug = "XX";
    return $this->render('FoohartBlogBundle:Blog:index.html.twig', array('slug' => $slug));
  }


}
<?php

namespace Drupal\helloword\Controller;

use Symfony\Component\HttpFoundation\Response;

class HellowordController{
  
  public function says($count) {
   
    $_str = 'Hello W' . str_repeat('o', $count) . 'rd!';
    return new Response($_str);
  }
  
}
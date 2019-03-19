<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index()
    {


      $requestUrl= "https://api.ozae.com/gnw/articles?key=11116dbf000000000000960d2228e999&edition=en-us-ny&hours=6&options[newsonfire]=1&order[col]=social_score&order[srt]=DESC";
      //$requestUrl= "https://jsonplaceholder.typicode.com/todos/1";
      $ch = curl_init();

  curl_setopt($ch,CURLOPT_URL, $requestUrl);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch,CURLOPT_HEADER, false);
  curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  $data=curl_exec($ch);

  if (curl_error($ch)) {
      var_dump();
  }
  curl_close($ch);

  print("<pre>".print_r(json_decode($data),true)."</pre>");

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'data' => $data,
        ]);
    }
}

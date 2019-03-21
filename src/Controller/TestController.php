<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Paris;
use App\Entity\Pollution;
use App\Entity\Toxique;
use App\Entity\Atmosphere;
use App\Entity\Ecologie;
use App\Entity\Nature;
use App\Entity\Protection;
use App\Entity\Faune;
use App\Entity\Flore;
use App\Entity\Nocif;
use App\Entity\Ecosysteme;
use App\Entity\Danger;


class TestController extends AbstractController
{
  public function storeArticles($article, $art, $entityManager)
  {
      if( $art['name'] != "Access Denied" || $art['name'] != "Access to this page has been denied.")
      {
        $article->setArticleid($art['id']);
        $article->setName($art['name']);
        $article->setUrl($art['url']);
        $article->setSource("source");
        $article->setTopics("topics");
        $article->setImgUri($art['img_uri']);
        $article->setDateFirstSeen($art['date_first_seen']);
        $article->setDateLastSeen($art['date_last_seen']);
        $article->setShowInterval($art['show_interval']);
        $article->setArticleScore($art['article_score']);
        $article->setSocialScore($art['social_score']);

        $entityManager->persist($article);
      }
    }
    /**
     * @Route("/", name="test")
     */
    public function index()
    {
      $matchCounter = 0;
      $match1 = [];
      $match2 = [];
      $match3 = [];
      $match4 = [];
      $match5 = [];
      $environnementArticles = [];


      $ParisArray = [];
      $PollutionArray = [];
      $ToxiqueArray = [];
      $AtmosphereArray = [];
      $EcologieArray = [];
      $NatureArray = [];
      $ProtectionArray = [];
      $FauneArray = [];
      $FloreArray = [];
      $NocifArray = [];
      $EcosystemeArray = [];
      $NocifArray = [];
      $DangerArray = [];
      $apiCalls = [
        "Paris" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=paris&hard_length=500",
        "Pollution" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=pollution&hard_length=500",
        "Toxique" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=toxique&hard_length=500",
        "Atmosphere" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=atmosphere&hard_length=500",
        "Ecologie" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=ecologie&hard_length=500",
        "Nature" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=nature&hard_length=500",
        "Protection" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=protection&hard_length=500",
        "Faune" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=faune&hard_length=500",
        "Flore" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=flore&hard_length=500",
        "Nocif" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=nocif&hard_length=500",
        "Ecosysteme" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=ecosysteme&hard_length=500",
        "Danger" => "https://api.ozae.com/gnw/articles?date=20180601__20180630&key=11116dbf000000000000960d2228e999&edition=fr-fr&query=danger&hard_length=500",
      ];

      $entityManager = $this->getDoctrine()->getManager();

   foreach( $apiCalls as $word => $request )
{

      //////////////////////////////////////////////////////CASE FOR ENVIRONNEMENT////////////////////////////////////////////////////////////////

      $requestUrl= $request;

      $ch = curl_init();

  curl_setopt($ch,CURLOPT_URL, $requestUrl);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch,CURLOPT_HEADER, false);
  curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  $data=curl_exec($ch);

  curl_close($ch);

$decodedData = json_decode($data,true);

//test url du premier article

//test pretty print array
//print("<pre>".print_r($decodedData,true)."</pre>");

//get articles from main response array
$articles = $decodedData['articles'];
//var_dump($articles);die;
//print("<pre>".print_r($articles[0],true)."</pre>");
switch($word)
{
  case "Paris":

    foreach( $articles as $art )
    {
      $article = new Paris();
      $this->storeArticles($article, $art, $entityManager);
    }
    $ParisArray = $articles;

    break;

    case "Pollution":

      foreach( $articles as $art )
      {
        $article = new Pollution();
        $this->storeArticles($article, $art, $entityManager);
      }
      $PollutionArray = $articles;

      break;

    case "Atmosphere":

      foreach( $articles as $art )
      {
        $article = new Atmosphere();
        $this->storeArticles($article, $art, $entityManager);
      }
      //$AtmosphereArray = $articles;

      break;

      case "Ecologie":

        foreach( $articles as $art )
        {
          $article = new Ecologie();
          $this->storeArticles($article, $art, $entityManager);
        }
        //$EcologieArray = $articles;

        break;

        case "Nature":

          foreach( $articles as $art )
          {
            $article = new Nature();
            $this->storeArticles($article, $art, $entityManager);
          }
          $NatureArray = $articles;

          break;

          case "Protection":

            foreach( $articles as $art )
            {
              $article = new Protection();
              $this->storeArticles($article, $art, $entityManager);
            }
            //$ProtectionArray = $articles;

            break;

            case "Faune":

              foreach( $articles as $art )
              {
                $article = new Faune();
                $this->storeArticles($article, $art, $entityManager);
              }
            //  $FauneArray = $articles;

              break;

              case "Flore":

                foreach( $articles as $art )
                {
                  $article = new Flore();
                  $this->storeArticles($article, $art, $entityManager);
                }
                //$FloreArray = $articles;

                break;

                case "Nocif":

                  foreach( $articles as $art )
                  {
                    $article = new Nocif();
                    $this->storeArticles($article, $art, $entityManager);
                  }
                  //$NocifArray = $articles;

                  break;

                  case "Ecosysteme":

                    foreach( $articles as $art )
                    {
                      $article = new Ecosysteme();
                      $this->storeArticles($article, $art, $entityManager);
                    }
                    break;

                    case "Toxique":

                      foreach( $articles as $art )
                      {
                        $article = new Toxique();
                        $this->storeArticles($article, $art, $entityManager);
                      }
                      break;

                      case "Danger":

                        foreach( $articles as $art )
                        {
                          $article = new Danger();
                          $this->storeArticles($article, $art, $entityManager);
                        }
                        //$DangerArray = $articles;
                        break;

  }

  $entityManager->flush();
}
//var_dump($NatureArray);die;

//print("<pre>".print_r($ParisArray,true)."</pre>");

//on check que les articles pour le mot courant match avec ceux concernant Paris
foreach ($ParisArray as $valueParis)
{

  foreach ($NatureArray as $valueTested)
  {
    print"<br>";
    //si ca match
    if($valueTested['id'] == $valueParis['id'])
    {
      $matchCounter++;
      print "<br>valuetested = ".$valueTested['id']." -- valueParis = ".$valueParis['id'];

    }else{
      print "no match";
    }
  }

  //si on a assez de match (nb de match > N)
  if($matchCounter > 0)
  {
    //on insere l'article dans l array $environnementArticles
    array_push($environnementArticles,$valueParis);
    $matchCounter=0;
  }
}


//var_dump($environnementArticles);
//print("<pre>".print_r($ParisArray,true)."</pre><br><br>");
//print("<pre>".print_r($PollutionArray,true)."</pre><br><br>");
print("<pre>".print_r($environnementArticles,true)."</pre><br><br>");


///////////////////////////////////////Get the pot articles/////////////////////////////////////

        return $this->render('test/index.html.twig', [
          'controller_name' => 'TestController',
          'articles' => $ParisArray,

        ]);

  }

}

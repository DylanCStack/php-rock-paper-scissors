<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RPSGame.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;

    $app->get("/" , function() use ($app)
    {
        return $app['twig']->render('RPSHome.html.twig');
    });

    $app->post("/shoot" , function() use ($app)
    {
        $game = new RPSGame;
        $the_winner = $game->playGame($_POST['input1'] , $_POST['input2']);
        
        return $app['twig']->render('RPSHome.html.twig', array('winner' => $the_winner));

    });
    return $app;
?>

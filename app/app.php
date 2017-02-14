<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";
    session_start();
    if (empty($_SESSION['pingpong_array'])) {
        $_SESSION['pingpong_array'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"

    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("homepage.html.twig");
    });

    $app->post("/pingpong", function() use ($app) {
        $new_pingponged = new PingPonged();
        $result = $new_pingponged->pingPongify($_POST['input']);
        $result = implode($result , " ");
        return $app['twig']->render('pingpong.html.twig', array('result'=>$result));
    });

    return $app;
?>

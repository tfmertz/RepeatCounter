<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('form.twig');

    });

    $app->post('/results', function() use ($app) {

        $repeatCounter = new RepeatCounter();

        //get the information from POST and pass it to our method
        $input_word = $_POST['input_word'];
        $input_sentence = $_POST['input_sentence'];

        $count_number = $repeatCounter->countRepeats($input_word, $input_sentence);

        //pass twig our stats
        return $app['twig']->render('results.twig', array('word' => $input_word, 'sentence' => $input_sentence, 'count' => $count_number));

    });

    return $app;

 ?>

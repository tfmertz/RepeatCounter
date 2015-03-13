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

        //get the information from POST
        $input_word = $_POST['input_word'];
        $input_sentence = $_POST['input_sentence'];

        //and pass it to our method
        $count_number = $repeatCounter->countRepeats($input_word, $input_sentence);

        //splitPunctuation so we can display formated results with twig highlighting the matched word
        $sentence_array = $repeatCounter->splitPunctuation($input_sentence);

        //pass twig our word, sentence and count
        return $app['twig']->render('results.twig', array('word' => $input_word, 'sentence' => $sentence_array, 'count' => $count_number));

    });

    return $app;

 ?>

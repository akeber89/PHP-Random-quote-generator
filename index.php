<?php

$quotes = [
    [
        'author' => 'Eleanor Roosevelt',
        'text' => 'If life were predictable it would cease to be life, and be without flavor.'
    ],

    [
        'author' => 'Aristotle',
        'text' => 'It is during our darkest moments that we must focus to see the light.'
    ],

    [
        'author' => 'Maya Angelou',
        'text' => 'You will face many defeats in life, but never let yourself be defeated.'
    ],

    [
        'author' => 'Albert Einstein',
        'text' => 'Only a life lived for others is a life worthwhile.'
    ],

    [
        'author' => 'Steve Jobs',
        'text' => 'Your time is limited, so don\'t waste it living someone else\'s life. Don\'t be trapped by dogma -- which is living with the results of other people\'s thinking.'
    ],

    [
        'author' => 'Thomas A. Adison',
        'text' => 'Many of life\'s failures are people who did not realize how close they were to success when they gave up.'
    ],
];


$quote = $quotes[array_rand($quotes)];

$quoteText = $quote['text'];

$quoteAuthor = $quote['author'];

?>

<!doctype html> 

 
<html lang="en"> 

    <head> 

        <meta charset="utf-8"> 

        <title>Random quote generator</title> 

        <link rel="stylesheet" href="css/styles.css?v=1.0"> 

    </head> 

    <body>
        <blockquote>
            <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2>

            <strong>- <?php echo $quoteAuthor ?></strong>
        
        </blockquote>

    </body> 

</html> 
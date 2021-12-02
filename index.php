<?php

$sentence= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et assumenda nobis nostrum iure dolor 
blanditiis vitae mollitia. Beatae quis magni dolore voluptas, repellat deserunt iste labore ratione 
accusamus. Quas reiciendis, iusto soluta id voluptates, vero, cumque repellendus iste blanditiis odit 
asperiores? Aliquid adipisci, quis laudantium, sit enim suscipit officiis vel cumque culpa ex ullam rerum 
velit nulla itaque nam natus! Libero delectus pariatur, commodi asperiores obcaecati repellat? Esse, ab eius 
nisi veniam velit omnis voluptate itaque, magni assumenda recusandae corporis natus quae nemo quam animi labore. 
Laborum unde quas sapiente eius nostrum consectetur suscipit, voluptate natus, alias vel aut dolore.
";

$censored = $_GET["word"];

$censoredSentence = str_replace($censored, "***", $sentence);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Original Sentence: </h2>
  
   <p>
       <?php echo $sentence ?>
   </p> 

   <h2>Lenght: <?php echo (strlen($sentence)) ?></h2>

  <h2>Censored Sentence: </h2>
  
   <p>
       <?php echo $censoredSentence ?>
   </p> 

   <h2>Lenght: <?php echo (strlen($censoredSentence)) ?></h2>


</body>
</html>
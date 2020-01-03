<article class="card text-center">
<!---------------------Begin Tabs-------------------->
  <h2 class="text-left article-title-colors" >Initialize Arrays</h2>
<ul class="nav nav-tabs" id="tab1" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" href="#challenge1" role="tab" aria-controls="challenge" aria-selected="true"><h3>Goal</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution1" role="tab" aria-controls="solution" aria-selected="false"><h3>Arrays</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="code-tab" data-toggle="tab" href="#code1" role="tab" aria-controls="code" aria-selected="false"><h3>PHP Syntax</h3></a>
  </li>
</ul>
<!---------------------Tab 1 Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" id="tab1Content">

<div class="tab-pane fade show cinch active" id="challenge1" role="tabpanel" aria-labelledby="challenge-tab">
  <ol>
  <li>Make an iterative PHP array.</li>
  <li>Make an associative PHP array.</li>
  </ol>
</div>
<div class="tab-pane cinch fade" id="solution1" role="tabpanel" aria-labelledby="solution-tab">

<!------- Tab 2 content: Initialize three arrays-------------->
<?php 

$words = array('Even', 'while', 'he', 'utters', 'his', 'cynical', 'wisdom', 'in', 'an', 'indescribably', 'droll', 'voice', 'he', 'makes', 'you', 'feel', 'that', 'his', 'heart', 'is', 'a', 'tender', 'Iliad', 'of', 'human', 'sympathy');

$players = array (
"James Palmer" => array("Bernardo sentinel", "Mourner"),
"Addison Smith"  => array("Francisco soldier", "Priest 1"),
"Sam White"  =>  array("Ghost of Hamlet's Father"),
"Sarah Johnson"  => array("Queen Gertrude"),
"Sara Kraft"  =>  array("Polonius"),
"Marie Freese"  => array("Rosenkrantz"),
"Leigha Vilen"  =>  array("Guildenstern"),
"Evan Genest"  =>  array("Attendent", "Mourner", "Priest"));

$ecclesiastes_string = "A season for every activity under heaven:
a time to be born and a time to die,
a time to plant and a time to uproot,
a time to kill and a time to heal,
a time to tear down and a time to build,
a time to weep and a time to laugh,
a time to mourn and a time to dance,
a time to scatter stones and a time to gather them,
a time to embrace and a time to refrain,
a time to search and a time to give up,
a time to keep and a time to throw away,
a time to tear and a time to mend,
a time to be silent and a time to speak,
a time to love and a time to hate,
a time for war and a time for peace.";

$ecclesiastes_array = explode(' ', $ecclesiastes_string);
?>
<p><strong>Iterative Array</strong></p>
<?php
echo nl2br("If you join the first 11 words of the array you get this: \n\n");
echo implode('%', array_slice($ecclesiastes_array, 0, 11) );
?>
<p><strong><br />Associative Array</strong></p>
<?php

$player1 = "Sam White";
echo nl2br("On 2/29/2020, Madison Shakespeare's Hamlet will have an actor named [$player1] who is playing the part of \n\n") . implode($players[$player1]);

?>


</div>

<!------------Tab 3-------------->
<div class="tab-pane fade cinch" id="code1" role="tabpanel" aria-labelledby="code-tab">Code <a href="https://github.com/atom-box/php-challenges/blob/master/includes/one.php"> here </a></div>

</div>
</article>
<article class="card text-center">
<!---------------------Begin Tabs-------------------->
  <h2 class="text-left inverse" >Initialize Arrays</h2>
<ul class="nav nav-tabs" id="tab1" role="tablist">
  <li class="nav-item"><h3>
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" href="#challenge1" role="tab" aria-controls="challenge" aria-selected="true">Goal</a></h3>
  </li>
  <li class="nav-item"><h3>
    <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution1" role="tab" aria-controls="solution" aria-selected="false">Arrays</a></h3>
  </li>
  <li class="nav-item"><h3>
    <a class="nav-link" id="code-tab" data-toggle="tab" href="#code1" role="tab" aria-controls="code" aria-selected="false">Further reading</a></h3>
  </li>
</ul>
<!---------------------Begin Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" id="tab1Content">

<div class="tab-pane fade show cinch active" id="challenge1" role="tabpanel" aria-labelledby="challenge-tab">
  <p>Make an iterative PHP array. <br /><br />Make an associative PHP array.</p>
</div>
<div class="tab-pane cinch fade" id="solution1" role="tabpanel" aria-labelledby="solution-tab">
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
echo "One word:<br/>";
echo $words[4] . "\n";
echo "One role: <br/>";
echo $players["Sam White"][0] . "\n";
?>
</div>
<div class="tab-pane fade cinch" id="code1" role="tabpanel" aria-labelledby="code-tab">MadisonShakespeare <a href="https://twitter.com/madshakes"> Twitter</a></div>

</div>
</article>
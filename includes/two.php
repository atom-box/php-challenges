<article class="card text-center">
<!---------------------Begin Tabs-------------------->
  <h2 class="text-left article-title-colors" >PHP Time</h2>
<ul class="nav nav-tabs" id="tab2" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" href="#challenge2" role="tab" aria-controls="challenge" aria-selected="true"><h3>Plain</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution2" role="tab" aria-controls="solution" aria-selected="false"><h3>Web</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="code-tab" data-toggle="tab" href="#code2" role="tab" aria-controls="code" aria-selected="false"><h3>Validate</h3></a>
  </li>
</ul>
<!---------------------Tab 2 Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" id="tab2Content">

<div class="tab-pane fade show cinch active" id="challenge2" role="tabpanel" aria-labelledby="challenge-tab">
  <h3> 
  <?php     
    echo nl2br("The Unix time is :\n"); 
    echo time();
    echo nl2br("\n\n");
    echo nl2br("The date is :\n"); 
    echo date('l F Y', time());
  ?>
</h3>
</div>
<div class="tab-pane cinch fade" id="solution2" role="tabpanel" aria-labelledby="solution-tab">

<!------- Tab 2 content: Initialize three arrays-------------->

<h3>
<?php 
    echo nl2br("In Cookie Format:\n"); 
    // echo date(DATE_COOOKIE);
    echo nl2br("\n\n");
    echo nl2br("In RSS Format:\n"); 
    echo date(DATE_RSS);
    echo nl2br("\n\n");
    echo nl2br("In W3C Format:\n"); 
    echo date(DATE_W3C);
?>
</h3>


</div>

<!------------Tab 3-------------->
<div class="tab-pane fade cinch" id="code2" role="tabpanel" aria-labelledby="code-tab">Code <a href="https://github.com/atom-box/php-challenges/blob/master/includes/two.php"> here </a></div>

</div>
</article>




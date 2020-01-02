<article class="card text-center">
<!---------------------Begin Tabs-------------------->
  <h2 class="text-left article-title-colors" >PHP Time</h2>
<ul class="nav nav-tabs" id="tab3" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" href="#challenge3" role="tab" aria-controls="challenge" aria-selected="true"><h3>Basic Session Info</h3></a>
  </li>
</ul>
<!---------------------Tab 1 Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" id="tab3Content">

<div class="tab-pane fade show cinch active" id="challenge3" role="tabpanel" aria-labelledby="challenge-tab">
<h3> 
  <?php
  echo ' 
  <form action="" method="">
  <pre>
    Author <input type="text" name="author" />
    Title <input type="text" name="title" />
    Category <input type="text" name="category" />
    Year <input type="text" name="year" />
    ISBN <input type="text" name="isbn" />
  </pre>
  </form>
  <h3>Hello</h3>
  <h1><i>World</i></h1>
  <p>& Co</p>
  ';
  ?>
</h3>
</div>
<div class="tab-pane cinch fade" id="solution3" role="tabpanel" aria-labelledby="solution-tab">

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
<div class="tab-pane fade cinch" id="code3" role="tabpanel" aria-labelledby="code-tab">Code <a href="https://github.com/atom-box/php-challenges/blob/master/includes/three.php"> here </a></div>

</div>
</article>




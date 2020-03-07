

<article class="card text-center">
<!---------------------Lone Tab Heading-------------------->
  <h2 class="text-left article-title-colors" >Digits Slider</h2>
<ul class="nav nav-tabs"  role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" role="tab" aria-controls="challenge" aria-selected="true"><h3>Rewrite!</h3></a>
  </li>
</ul>
<!--------------------- Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" >
  <div class="tab-pane fade show cinch active"  role="tabpanel" aria-labelledby="challenge-tab">
    <p>Slide the slider and get a revised digit-sum.</p>
    <ol>
      <li>Rewrite the form so it has a slider</li>
      <li>Think out the object schema</li>
      <li></li>
      <li></li>
      <li></li>
    </ol>

<form action="./index.php" method="post" class="d-flex justify-content-around ">
  <div class=" d-flex justify-content-center" >
<div class="slidecontainer ">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
</div>
  </div>

</form>

<div  class="d-flex justify-content-around ">
    <div class="inverse framed  justify-content-center" >
      <p>The sum of these digits... </p>
      <?php
        $a1 = $_POST["a1"] ?? 0; // null coalescing operator, PHP7 defaults!
        $a1 = (int) $a1; 
        $a2 = $_POST["a2"] ?? 0; // null coalescing operator, PHP7 defaults!
        $a2 = (int) $a2; 

        echo "($a1, $a2)";
      ?>
    </div>
     <div class="inverse framed justify-content-center" >
      <p>...is this:</p>
      <?php

        if (isset($_POST["a1"])){
          $a1 = (int)$_POST["a1"];
          $a2 = (int)$_POST["a2"];
          $b1 = (int)$_POST["b1"];
          $b2 = (int)$_POST["b2"];
          $result = $a1 + $a2;
          if ($a1 + $a2 < ($b1 + $b2)){
            $result = $b1 + $b2;
          }
          echo  $result;
        } else {
          echo 0;
        }
      ?>
    </div>
</div>


  </div>
</div>
</article>




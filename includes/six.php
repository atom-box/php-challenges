<?php 
// Define a class.

/*
 public function __construct(
        OrderInterface $order,
        SlimProductInterface $product,
        string $sku,
        int $requestedQty,
        ?string $zip,
        int $liveQty,
        \DateTimeInterface $created
    ) {
        $this->order = $order;
        $this->product = $product;
        $this->sku = $sku;
        $this->requestedQty = $requestedQty;
        $this->zip = $zip;
        $this->liveQty = $liveQty;
@@ -77,6 +85,14 @@ public function getProduct(): SlimProductInterface
        return $this->product;
    }
 
     // @return string
 
    public function getSku(): string
    {
        return $this->sku;
    }
*/

?>



<article class="card text-center">
<!---------------------Lone Tab Heading-------------------->
  <h2 class="text-left article-title-colors" >Logic</h2>
<ul class="nav nav-tabs"  role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" role="tab" aria-controls="challenge" aria-selected="true"><h3>Which has a larger sum? (a, b)?  (c, d)?</h3></a>
  </li>
</ul>
<!--------------------- Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" >
  <div class="tab-pane fade show cinch active"  role="tabpanel" aria-labelledby="challenge-tab">


<form action="./index.php" method="post" class="d-flex justify-content-around ">
  <div class="inverse framed d-flex justify-content-center" >
    <input type="radio" name="a1" value="5" checked> 5<br>
    <input type="radio" name="a1" value="13"> 13<br>
    <input type="radio" name="a1" value="42"> 42 <br>
  </div>
  <div class="inverse framed d-flex justify-content-center" >
    <select name="a2">
    <option value="12">12</option>
    <option value="14">14</option>
    <option value="16">16</option>
    <option value="18">18</option>
    </select><br/>
  </div>
  <div class="inverse framed d-flex justify-content-center" >
    <input type="radio" name="b1" value="5" checked> 5<br>
    <input type="radio" name="b1" value="13"> 13<br>
    <input type="radio" name="b1" value="42"> 42 <br>
  </div>
  <div class="inverse framed d-flex justify-content-center" >
    <select name="b2">
    <option value="12">12</option>
    <option value="14">14</option>
    <option value="16">16</option>
    <option value="18">18</option>
  </select><br/>
  </div>
  <br />
  <input type="submit" value="Submit"> 
</form>

<div  class="d-flex justify-content-around ">
    <div class="inverse framed  justify-content-center" >
      <p>Array A is </p>
      <?php
        $a1 = $_POST["a1"] ?? 0; // null coalescing operator, PHP7 defaults!
        $a1 = (int) $a1; 
        $a2 = $_POST["a2"] ?? 0; // null coalescing operator, PHP7 defaults!
        $a2 = (int) $a2; 

        echo "($a1, $a2)";
      ?>
    </div>
    <div class="inverse framed  justify-content-center" >
      <p>Array B is </p>
      <?php
        $b1 = $_POST["b1"] ?? 0; // null coalescing operator, PHP7 defaults!
        $b1 = (int) $b1; 
        $b2 = $_POST["b2"] ?? 0; // null coalescing operator, PHP7 defaults!
        $b2 = (int) $b2;         
        echo "($b1, $b2)";
      ?>
    </div>
    <div class="inverse framed justify-content-center" >
      <p>The greater sum is</p>
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




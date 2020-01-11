<article class="card text-center">
<!---------------------Lone Tab Heading-------------------->
  <h2 class="text-left article-title-colors" ><a href="https://codingbat.com/prob/p109537">Stanford U.</a> <i>Coding-Bat</i></h2>
<ul class="nav nav-tabs"  role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="challenge-tab" data-toggle="tab" role="tab" aria-controls="challenge" aria-selected="true"><h3>Bigger Two</h3></a>
  </li>
</ul>
<!--------------------- Content-------------------->
<div class="tab-content propped d-flex  align-items-center justify-content-around" >
  <div class="tab-pane fade show cinch active"  role="tabpanel" aria-labelledby="challenge-tab">
<code>
Start with 2 int arrays, a and b, each length 2. Consider the sum of the values in each array. Return the array which has the largest sum. In event of a tie, return a.
</code>
<pre>
Examples of input→expected output:
biggerTwo([1, 2], [3, 4]) → [3, 4]
biggerTwo([3, 4], [1, 2]) → [3, 4]
biggerTwo([1, 1], [1, 2]) → [1, 2]
</pre>

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




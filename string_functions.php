<?php 
    include 'header.php'; 
    $univ = "HOLY ANGEL UNIVERSITY";
    $name = "Klaus Haddock";
    define("GREETINGS", "Welcome to HAU");
?>

<span class="category-label">Changing Case & Counting</span>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th style="width: 50%;">Category/Function</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Lowercase</td><td><?php echo strtolower($univ); ?></td></tr>
    <tr><td>Uppercase</td><td><?php echo strtoupper("holy angel university"); ?></td></tr>
    <tr><td>Capitalize</td><td><?php echo ucwords(strtolower($univ)); ?></td></tr>
    <tr><td>Character Count</td><td><?php echo strlen($name); ?></td></tr>
    <tr><td>Word Count</td><td><?php echo str_word_count($name); ?></td></tr>
  </tbody>
</table>

<span class="category-label">Removing and Replacing Characters</span>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th style="width: 50%;">Category/Function</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Remove whitespaces from left</td>
      <td>"<?php echo ltrim("  hello Zayne"); ?>"</td>
    </tr> 
    <tr>
      <td>Remove whitespaces from right</td>
      <td>"<?php echo rtrim("you're good   "); ?>"</td>
    </tr>
    <tr>
      <td>Remove whitespace from left and right</td>
      <td>"<?php echo trim("   alright then     "); ?>"</td>
    </tr>
    <tr>
      <td>String replace</td>
      <td><?php echo str_replace("Haddock", "Forger", $name); ?></td>
    </tr>
    <tr>
      <td>String ireplace</td>
      <td><?php echo str_ireplace("klaus", "Agent", $name); ?></td>
    </tr>
    <tr>
      <td>String Repeat</td>
      <td><?php echo str_repeat("$name ", 2); ?></td>
    </tr>
  </tbody>
</table>



<span class="category-label">9 More Advanced Built-in Functions</span>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th style="width: 50%;">Category/Function</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    <tr><td><b>Multibyte String:</b> </td><td><?php echo mb_strtoupper("klaus haddock", "UTF-8"); ?></td></tr>
    <tr><td><b>Regular Expression:</b></td><td><?php echo preg_match("/Klaus/", $name) ? "Match Found" : "No Match"; ?></td></tr>
    <tr><td><b>Checking Characters:</b> </td><td><?php echo strpbrk($name, "H"); ?></td></tr>
    <tr><td><b>Numeric Function:</b></td><td><?php echo round(15.75); ?></td></tr>
    <tr><td><b>Sorting Array:</b></td><td> <?php 
    $colors = array("d"=>"Purple", "a"=>"Gold", "b"=>"White");
    asort($colors);
    foreach($colors as $key => $val) { echo "[$key]: $val "; } 
?>
</td></tr>
    <tr><td><b>Constants:</b></td><td><?php echo GREETINGS; ?></td></tr>
    <tr><td><b>Array Function:</b></td><td><?php echo count(explode(" ", $name)); ?> items</td></tr>
    <tr><td><b>Numeric Function:</b></td><td><?php echo min(10, 5, 20); ?> (Minimum)</td></tr>
    <tr><td><b>Working with Numbers:</b></td><td><?php echo abs(-150); ?> (Absolute)</td></tr>
  </tbody>
</table>

<?php include 'footer.php'; ?>


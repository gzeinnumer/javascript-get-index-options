<p id="p">selectedIndex: 0</p>

<select id="select" onchange="myFunction()">
  <option selected>Option A</option>
  <option>Option B</option>
  <option>Option C</option>
  <option>Option D</option>
  <option>Option E</option>
</select>

<script>
function myFunction() {
  var selectElem = document.getElementById('select')
  var pElem = document.getElementById('p')

  var index = selectElem.selectedIndex;
    // Add that data to the <p>
    pElem.innerHTML = 'selectedIndex: ' + index;

}
</script>

<?php
$array1= array('Mathematics','Physics');
array_push($array1,'Chemistry','Biology');
array_push($array1,'java');
print_r($array1);

echo $array1[0];
echo $array1[2];
?>

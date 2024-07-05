<?php
require_once(APPPATH . 'views/header.php');
?>





<div class="hebcal-shabbat"  id="hebcal-shabbat"></div>
<script>
fetch('https://www.hebcal.com/shabbat?cfg=i2&zip=21209&ue=off&b=18&M=on&lg=a&tgt=_top')
  .then(response => response.text())
  .then(data => document.getElementById('hebcal-shabbat').innerHTML = data);
</script>




<p class="daven-title" style="font-family:Roboto Slab, serif;
font-weight: lighter; font-size: 20px;  ">MEVAKSHI TORAH <BR>DAVENING TIMES </p>


<h2 class="title-daven" style="font-weight: bold;" >שבת קודש פרשת בהר</h2>
<div class="daven-details" >
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Mincha - 7:00</p>
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Candle Lighting - 8:03</p>
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Shkiah - 8:21</p>
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Shachris Minyan - 9:00</p>
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Early Mincha - 1:45</p>
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Mincha - 7:53</p>
  <p style="font-family: Roboto Slab, serif; font-size: 25px">Maariv - 9:13 | Rabbeinu Tam - 9:35</p>
 
  
</div>








<hr>











<?php
require_once(APPPATH . 'views/footer.php');
?>
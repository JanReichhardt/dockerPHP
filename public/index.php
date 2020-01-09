<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your Cart</title>
  </head>
  <style media="screen">
.box{
float:left;
width:100%;
}
.mainbox{
margin-left: 5%;
margin-right: 10%;
border-right: 10%;
width:80%;
height:80%;
}
.image{
  width: 15%;
  display: inline-block;
}
.info{
  height: 3%;
  width: 20%;
display: inline-block;
}
.little{
  height: 5%;
  display: inline-block;
  width: 20%
}
.price{
  display: inline-block;
  float: right;
  margin-top: 10%
}
</style>

  <body>
    <form class="" action="index.html" method="post">

<div class="mainbox">


<h1>Your Cart</h1>
<br>
<div class="box">
  <div class="image">
    <img src="images/wild_purple_1.svg"width="130" alt="Wild Purple">
  </div>
  <div class="info">
    <p>Wild Purple <br>
      6,90€<br></p>
      <p><font size="2"> 24 portions, all-white chewing bags,<br>
      Strength: 10mg/g. Weight 16,8 g</font> </p>
  </div>
  <div class="info">
      <select name="auswahl_1" size="1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
  </div>
  <div class="price">
  <?php
$auswahl_1=$post_['$auswahl_1'];
$Preis_1 = $auswahl_1*6.90;
echo "$Preis_1 €";
  ?>

  </div>
</div>
  <hr>
<div class="box">
  <div class="image">
    <img src="images/tropic_gold_1.svg"width="130" alt="Tropic Gold">
  </div>
  <div class="info">
    <p>Tropic Gold<br>
      6,90€<br></p>
      <p><font size="2"> 24 portions, all-white chewing bags,<br>
      Strength: 10mg/g. Weight 16,8 g</font> </p>
    </div>
    <div class="info">
        <select name="aushwahl_2" size="1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
    </div>
    <div class="price">
      <?php
    $auswahl_2=$post_['$auswahl_2'];
    $Preis_2 = $auswahl_2*6.90;
    echo "$Preis_2  €";
      ?>
    </div>
  </div>
<hr>
<div class="info">
  <p> Do you have a coupon? <input type="text" name="coupon" value="Promotion code"> </p>
</div>
<hr>
<div class="box">
  <div class="info">
    <p>Do you have a voucher?
  </div>
  <div class="little">
    <font size="1"> Please note: If you have received a
                                             voucher for a free pack of EPOK from
                                             your friends, a retailer or a
                                             Seller, follow this link:
                                             <href="epok.de/trail">epok.de/trail
                                             </font></p>
  </div>
</div>
<hr>
<div class="box">
<div class="info">
<p>Total
</div>
<div class="little">
<font size="1">Incl. 19%VAT, Shipping & discount codes applied during checkout</font></p>
</div>
<div class="price">
<?php
$gesamtpreis= $Preis_1+$Preis_2;
echo "$gesamtpreis €";
?>
</div>
</div>
<div class="box">
  <p align="right">
  <input type="submit" name="Order" value="Order">
  </p>
</div>
</div>
</form>
</html>

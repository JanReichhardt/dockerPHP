<!DOCTYPE html>
<html lang="de">
  <?php
    require("elements/head.php")
   ?>
  <body>
    <?php
      require("elements/navbar.php")
     ?>

     <div class="container">
       <h4 class="display-4 my-4">YOUR CART</h1>
         <?php
           require("elements/item.php");
           genItem("TOLLES PRODUKT", 1, "Ist wirklich wirklich wirklich wirklich wirklich wirklich super!", 10.50, 4, "polar_green_1.svg");
           genItem("TOLLES PRODUKT", 2, "Ist wirklich wirklich wirklich wirklich wirklich wirklich besser!", 12.50, 2, "tropic_gold_1.svg");
           genItem("TOLLES PRODUKT", 3, "Ist wirklich wirklich wirklich wirklich wirklich wirklich das beste!", 14.50, 1, "wild_purple_1.svg");
          ?>

     </div>


    <?php
      require("elements/footer.php")
     ?>
  </body>
</html>

<?php
function genItem($name, $strength, $desc, $price, $count, $img) {

  $type1 = "far";
  $type2 = "far";
  $type3 = "far";
  $type4 = "far";

  if($strength >= 1) {
    $type1 = "fas";
  }
  if($strength >= 2) {
    $type2 = "fas";
  }
  if($strength >= 3) {
    $type3 = "fas";
  }
  if($strength >= 4) {
    $type4 = "fas";
  }

  $sum = $price * $count;
  $printSum = number_format($sum, 2, '.', '');
  $printPrice = number_format($price, 2, '.', '');

  print("
  <div class='row'>
    <div class='col-sm-2 d-none d-xl-block overflow-hidden'>
      <img src='../images/{$img}' style='width: 10rem;'>
    </div>
    <div class='col-xl-10'>
      <div class='row mt-3 text-dark'>
        <div class='col-md-6'>
          <h4>{$name}</h4>
          <small style='font-size: 0.8rem;'>
            <i class='{$type1} fa-circle'></i>
            <i class='{$type2} fa-circle'></i>
            <i class='{$type3} fa-circle'></i>
            <i class='{$type4} fa-circle'></i>
             <span class='ml-2'>
               STRENGTH
               <br>
               <br>
             </span>
          </small>
          <span style='font-size: 1.4rem'>{$printPrice} €</span>
          <p style='font-size: 0.8rem; font-color: grey;'>
            {$desc}
          </p>

        </div>
        <div class='col-md-6 d-flex align-items-end'>
          <div class='d-flex justify-content-between align-items-center w-100 mb-3'>
            <div class='input-group float-left' style='width: 7.5rem;'>
              <div class='input-group-prepend'>
                <button class='btn btn-outline-secondary' type='button' id='button-add-{$name}'>+</button>
              </div>
              <input type='number' min='1' max='100' class='form-control text-center count' value='{$count}' id='count-{$name}'>
              <div class='input-group-append'>
                <button class='btn btn-outline-secondary' type='button' id='button-remove-{$name}'>-</button>
              </div>
            </div>
            <div class='float-left'>
              <i class='fas fa-trash'></i>
            </div>
            <div class='float-right'>
              <span>{$printSum} €</span>
            </div>
          </div>


        </div>

      </div>
    </div>
  </div>
  <hr>
  ");
}

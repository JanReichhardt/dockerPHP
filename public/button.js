"use strict";

var add = document.getElementsByClassName('add');
for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('click', () => {
      var child = classname[i];
      var prod_id = child.parentElement.id;
      var counter = document.getElementById('add-' . prod_id)

    }, false);
}

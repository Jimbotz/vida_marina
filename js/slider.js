
function quitar() {
 const element = document.getElementById("slider-container");
 const element2 = document.getElementById("slider");
  check = document.getElementById("check");

  if (check.checked) {
      element.style.display='none';
      element2.style.display='none';
  }
  else {
      element.style.display='flex';
      element2.style.display='block';
  }
}
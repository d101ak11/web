function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("img");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
  }
  function tru(){
    result = document.getElementById('number'); 
    var qty = result.value; if( !isNaN(qty)) 
    result.value++;
    return false;
  }
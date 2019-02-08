// Write your solution here


$(document).ready(function(){
  let xhr = new XMLHttpRequest();
  let respone;
  console.log(xhr);

  xhr.onreadystatechange = function(){
    console.log(xhr.readyState);
    if(xhr.readyState === 4 && xhr.status === 200) {

      //console.log(xhr.responseText);
      myFunction(this);
    };

  };
    xhr.open("GET" , "http://api.wunderground.com/api/11b695bb1b69fac7/geolookup/conditions/q/BX/Diepenbeek.json");
    xhr.send();
});

function myFunction(xhttp){
  console.log(xhttp.responseText);
}

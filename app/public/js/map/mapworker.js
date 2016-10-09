// var i = 0;
//
// function timedCount() {
//     i = i + 1;
//     postMessage(i);
//     setTimeout("timedCount()",2000);
// }
//
// timedCount();
//

// function pollPosition() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         console.log(this.responseText);
//         postMessage(data);
//       } else {
//         console.log('Mapworker failed');
//       }
//     };
//     xhttp.open("POST", "https://www.googleapis.com/geolocation/v1/geolocate?key="+this.mapsApiKey, true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send("fname=Henry&lname=Ford");
//
//     setTimeout("pollPosition()",1000);
// }
//
// pollPosition();
var mapsApiKey = "AIzaSyBpTlJjnqhIO1wVlMC503Gm9XeDn2U7hfI";

function pollPosition() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
    }
  };
  xhttp.open("POST", "https://www.googleapis.com/geolocation/v1/geolocate?key="+mapsApiKey, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("");
  setTimeout("pollPosition()",2000);
}

pollPosition();

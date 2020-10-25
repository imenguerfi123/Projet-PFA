const char MAIN_page[] PROGMEM = R"=====(
<!DOCTYPE html>
<html>
<style>
.card{
  width:400px;
  height:  380px;
  background: rgba(0, 0, 0, 0.5);
  color:#fff;
  top:50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
}
h2{
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  text-decoration: underline;
  }
</style>
<body>
 
<div class="card">
  <h2>ESP32 Web Server</h2><br>
  <h1>Sensor Value:<span id="ADCValue">0</span></h1><br>
</div>
<script>
 
setInterval(function() {
  // Call a function repetatively with 2 Second interval
   getData();
}, 2000); //2000mSeconds update rate
 
function getData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ADCValue").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "readADC", true);
  xhttp.send();
}
</script>
</body>
</html>
)=====";

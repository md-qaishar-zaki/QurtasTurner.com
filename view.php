<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 20%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
  height: 300px;
}
.tabcontent img{
    width:100%;
    height:100%;
}
</style>
</head>
<body>
<?php $page = 'service'; include 'header.php' ?>

<div class="container" style="height:400px; padding:15px">
    
<h5>RECENT POSTS</h5>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">2018-11-14 07:33:58</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">2018-11-14 07:33:58</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">2018-11-14 07:33:58</button>
</div>

<div id="London" class="tabcontent">
    <img src="Themes/img/f1.png">
  
</div>

<div id="Paris" class="tabcontent">
    <img src="Themes/img/f1.png">
</div>

<div id="Tokyo" class="tabcontent">
    <img src="Themes/img/f1.png">
</div>
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php include 'footer.php' ?>
   
</body>
</html> 

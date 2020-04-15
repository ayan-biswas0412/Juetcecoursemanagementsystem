<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <ul class="header" style=" background-color: orange;" >
        
        <li><div class="dropdown">
           <button id="prof_menu" onclick="dropdownfunction()" class="dropbtn">Profile Update &nbsp;<i onclick="dropdownfunction()" class="arrow down-arrow"></i></button>
          <div id="myDropdown" class="dropdown-content">
           <a href="personal_details.php">Personal Details</a>
           <a href="parent_details.php">Parent Details</a>
           <a href="address_details.php">Address Details</a>
          </div>
         </div>
        </li>
        <li><div class="dropdown">
             <button id="sem_menu" onclick="dropdownfunction_semester()" class="dropbtn">Semester Info &nbsp;<i onclick="dropdownfunction_semester()" class="arrow down-arrow"></i></button>
            <div id="myDropdown_semester" class="dropdown-content">
             <a href="#">Semester Registration</a>
             <a href="#">Class Routine</a>
             <a href="#">Class Test Schedule</a>
             <a href="#">Class Test Results</a>
             
            </div>
           </div>
        </li>
        <li><div class="dropdown">
             <button id="notice_menu" onclick="dropdownfunction_notice()" class="dropbtn">Announcements &nbsp;<i onclick="dropdownfunction_notice()" class="arrow down-arrow"></i></button>
            <div id="myDropdown_notice" class="dropdown-content">
             <a href="../dashboard.php">Active Notices</a>
             <a href="../stu-noticearch_table.php">Archived Notices</a>
             
             
            </div>
           </div>
        </li>
     </ul>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropdownfunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function dropdownfunction_semester() {
    document.getElementById("myDropdown_semester").classList.toggle("show");
}
function dropdownfunction_notice() {
    document.getElementById("myDropdown_notice").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#prof_menu')) {
    var dropdowns = document.getElementsById("myDropdown");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
window.onclick = function(event) {
  if (!event.target.matches('#sem_menu')) {
    var dropdowns = document.getElementsById("myDropdown_semester");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
window.onclick = function(event) {
  if (!event.target.matches('#notice_menu')) {
    var dropdowns = document.getElementsById("myDropdown_notice");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>  
</body>

</html>
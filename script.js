
function opentab(evt, tabname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabname).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // function getSelectedValue() {
  //   const dropdown = document.getElementById("dropdown");
  //   const selectedOption = dropdown.options[dropdown.selectedIndex];
  //   const selectedValue = selectedOption.value;
  //   alert("Selected value: " + selectedValue);
  // }

  // Get the file input element and the file name element
var fileInput = document.getElementById('upload-input');
var fileName = document.getElementById('file-name');

// Listen for a change event on the file input
fileInput.addEventListener('change', function() {
  // Get the selected file(s) and update the file name element
  var file = fileInput.files[0];
  fileName.textContent = file.name;
});


function validateForm() {
  console.log(5);
  var name = document.forms["Form"]["name"].value;
  var age = document.forms["Form"]["age"].value;
  var address = document.forms["Form"]["address"].value;
  var email = document.forms["Form"]["email"].value;
  var gender = document.forms["Form"]["gender"].value;
  var quali = document.forms["Form"]["quali"].value;
  if ( name== "" || age == "" || address == "" || email == "" || gender == "Select" || quali == "Select Qualification") {
    alert("Please fill all the fields");
    return false;
  }
  else if(age > 120) {
    alert("Please enter a valid age!");
    return false;
  }
}
function test() {
  alert('bruh');
}
function validateForm() {
  console.log(5);
  var a = document.forms["Form"]["name"].value;
  var b = document.forms["Form"]["age"].value;
  var c = document.forms["Form"]["address"].value;
  var d = document.forms["Form"]["email"].value;
  var e = document.forms["Form"]["gender"].value;
  var f = document.forms["Form"]["quali"].value;
  if (a == "" || b == "" || c == "" || d == "" || e == "Select" || f == "Select Qualification") {
    alert("Please Fill all the fields");
    return false;
  }
}
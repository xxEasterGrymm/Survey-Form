function validateForm() {
    var name = document.forms["Form"]["name"].value;
    var age = document.forms["Form"]["age"].value;
    var address = document.forms["Form"]["address"].value;
    var email = document.forms["Form"]["email"].value;
    var gender = document.forms["Form"]["gender"].value;
    var quali = document.forms["Form"]["quali"].value;
    if (name== "" || age == "" || address == "" || email == "" || gender == "Select" || quali == "Select Qualification") {
      alert("Please fill all the fields before proceeding");
      return false;
    }
    else if(age > 120 || age < 13 ) {
      alert("Please enter a valid age!");
      return false;
    }
}

function validateSurveyForm() {
    var arr = [""];
    for(let i = 1; i <= 8; i++) {
        arr[i] = document.forms["FormSurvey"]["Q" + i].value;
        if(arr[i] == "") {
          alert("Please mark all the options before proceeding");
          return false;
        }
    }
    var formNum = document.forms["FormSurvey"]["surveyForm"].value;
    console.log(formNum);
    if(formNum == "No" || formNum == "") {
        alert("Please accept the terms before continuing");
      return false;
    }
}
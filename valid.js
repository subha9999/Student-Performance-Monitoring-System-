
function myfunction() {
    var x = document.getElementById("pass");

    if (x.type === "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}
function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("pass").value;

    if (username == "Faculty" && password == "1234") {
        alert("Login Succesfull");
        window.location.replace("homepage.php");
        return false;
    }
    else if (username == "Student" && password == "4321") {
        alert("Login Succesfull");
        window.location.replace("Stud_homepage.php");
        return false;
    }
    else if (username == "H.auth" && password == "12345") {
        alert("Login Succesfull");
        window.location.replace("higher_auth_dashboard.php");
        return false;
    }
    else if (username == "Dept.head" && password == "54321") {
        alert("Login Succesfull");
        window.location.replace("Dept.head_dashboard.php");
        return false;
    }
    else {
        alert("Login Failed");
    }
}


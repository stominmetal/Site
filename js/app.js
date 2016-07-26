// <editor-fold desc="Redirects" defaultstate="collapsed">


$('#home').click(function () {
    window.location.href = '?page=home';
});

$('#login').click(function () {
    window.location.href = '?page=login';
});


// </editor-fold>

// <editor-fold desc="Validation" defaultstate="collapsed">

function validateForm() {
    var username = document.forms["my_form"]["username"].value;
    var fullname = document.forms["my_form"]["fullname"].value;
    var pass1 = document.forms["my_form"]["password"].value;
    var pass2 = document.forms["my_form"]["passwordConfirm"].value;

    if (username.length < 3) {
        $(".message").html("Username must be at least 3 characters!");
        return false;
    }
    if (fullname.length < 3) {
        $(".message").html("Full Name must be at least 3 characters!");
        return false;
    }
    if (pass1.length < 6) {
        $(".message").html("Password must be at least 6 characters!");
        return false;
    }
    if (pass1 != pass2) {
        $(".message").html("Passwords do not match!");
        return false;
    }
    return true;
}
// <editor-fold desc="Redirects" defaultstate="collapsed">


$('#home').click(function () {
    window.location.href = '?page=home';
});

$('#login').click(function () {
    window.location.href = '?page=login';
});


// </editor-fold>

// <editor-fold desc="Validations" defaultstate="collapsed">

function validateForm() {
    var username = document.getElementById("username").value;
    var fullname = document.getElementById("fullname").value;
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("passwordConfirm").value;

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

//upload validations

function validateUploadForm() {
    var latitude = document.getElementById("lat").value;
    var longitude = document.getElementById("long").value;

    if (!(latitude >= -90 && latitude <= 90)) {
        $(".message").html("Latitude must be a real number between -90 and 90.");
        return false;
    }
    if (!(longitude >= -180 && longitude <= 180)) {
        $(".message").html("Longitude must be a real number between -180 and 180.");
        return false;
    }
    return true;
}

// </editor-fold>

//alert

function myFunction(id) {
    if (confirm('Click "Ok" if you want to delete this photo')) {
        window.location.replace("?page=delete&id=" + id);
    }
}
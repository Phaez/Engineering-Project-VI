

function loginCheck() {
    request = $.ajax({
        url: 'loggedin.php',
        type: "POST",
        datatype: "json"
    });
};
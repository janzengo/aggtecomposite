$(function () {
    // Cookies
    function setCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";

        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    //        Validate cookie
    var myCookie = getCookie("MyCookie");
    if (myCookie == null) {
        //                alert('No cookei');
        $('.preloader').css('display', 'block');
        setCookie("MyCookie", "foo", 7);
    } else {
        //                alert('yes cookei');
        $('.preloader').css('display', 'none');
    }
});
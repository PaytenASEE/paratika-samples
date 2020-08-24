function randomString(length, chars) {
            var mask = '';
            if (chars.indexOf('a') > -1) {
        mask += 'abcdefghijklmnopqrstuvwxyz';
    }
            if (chars.indexOf('A') > -1) {
        mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
            if (chars.indexOf('#') > -1) {
        mask += '0123456789';
    }
            if (chars.indexOf('!') > -1) {
        mask += '~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';
    }
            var result = '';
            for (var i = length; i > 0; --i) {
        result += mask[Math.round(Math.random() * (mask.length - 1))];
    }
            return result;
}

function setUrl() {
        var f1 = document.getElementById("f1").value;
        document.getElementById("formUrl").action = f1;
    }
function redirectToHPP() {
    var hppUrl = document.getElementById("hpp-url").value;
    window.location.replace(hppUrl);
}
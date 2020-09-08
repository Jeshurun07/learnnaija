/*Score files*/
var result = Cookies.get();
$.each(result, function(key, value) {
            $("#result").append("<p>" + key + ": " + value + "</p>");
        };
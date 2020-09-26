/*Score files*/
var result = Cookies.get();
//store the final result
var finalResult = [];
//store user's selection
var selObj = [];
//using the map funtion, get push the result into diff arrays
var corObj = [];
var toSearch = "cor";
$.each(result, function(key, value) {

    if (key.indexOf(toSearch) != -1) {
        corObj.push(value);
    } else {
        selObj.push(value);
    }
});
var remSel = selObj.pop();
i = 0;

function checkSelections(selObj, corObj) {
    return corObj.filter(function(item, i) {
        return selObj[i] === item;
    });
}

var finalResult = checkSelections(selObj, corObj);
finalScore = "";
finalResult = Math.round((finalResult.length / 30) * 100);
$("#result").append("<h1> Your Score is: " + finalResult + "% </h1>");
//Create the cookie to hold the score
$.cookie("finalScore", finalResult);

function deleteCookies() {
    //Remove all cookies code
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}
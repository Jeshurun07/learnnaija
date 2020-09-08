/*js files*/

$(document).ready(function() {
    function recorder() {
        var questionAns = {};
        var selectedVal = "";
        var selectedId = "";
        $("input[type = 'radio']").change(function() {
            //Grab the values the user selected and store in vars
            var corAns = $("input[name='cor']").val();
            var selectedVal = $(this).val();
            var selectedId = $(this).attr("id");
            //Grab the correct answers and store in vars
            var corAns = corAns;
            var corId = "cor-" + selectedId;
            //Set cookie to store both selected answers and correct answers
            Cookies.set(selectedId, selectedVal);
            Cookies.set(corId, corAns);
            var result = Cookies.get();
            console.log(Cookies.get());
        });
    }
    recorder();
});
/*questionAns[selectedId] = selectedVal;
    var keys = Object.keys(questionAns);
    var ansVal = Object.values(questionAns);*/
//localStorage.setItem('question', JSON.stringify(questionAns));
//localStorage.setItem('question', JSON.stringify(questionAns));
//console.log(questionAns.selectedId);


//console.log(localStorage.getItem('question'));
/*for (i = 0; i < keys.length; ++i) {To test if the object added the new values
    console.log(keys[i] + " which has the value " + ansVal[i] + " Length: " +
        keys.length); //stopped here: Next save the objects into session storage
}*/




/*window.onbeforeunload = function() {
                return "Are you sure";
                //event.returnValue = "Write something clever here..";

        };*/
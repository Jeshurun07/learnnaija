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
            //var result = Cookies.get();
            //console.log(Cookies.get());
        });
    }
    recorder();
});
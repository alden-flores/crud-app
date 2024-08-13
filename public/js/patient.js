$(function(){
    $("#coronavirus").hide();  // By default use jQuery to hide the second modal

    // We can use the change(); function to watch the state of the select box and run some conditional logic every time it's changes to hide or show the second select box
    $("#caseType").change(function(){
        if( $(".default").is(:selected) ){
            $("#coronavirus").hide();
        } else {
            $("#coronavirus").show();
        }
    });
});


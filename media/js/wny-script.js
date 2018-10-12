/**
 *
 *
 */


function wnyPractitioner(){
}

wnyPractitioner.prototype.validate_practitioner_registration = function(){
    //alert("register");
    console.log("Initiating registration process...");




}



(function($){

    $(document).ready(function(){

        var wny = new wnyPractitioner();

        $("#wny-create-practitioner form").on("submit", function(e){
            e.preventDefault();
            wny.validate_practitioner_registration();
        });



    });

})(jQuery);

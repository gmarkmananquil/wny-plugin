/**
 *
 *
 */


function wnyPractitioner(){
}

wnyPractitioner.prototype.register_practitioner = function(){
    //alert("register");
    console.log("Initiating registration process...");
}



(function($){

    $(document).ready(function(){

        var wny = new wnyPractitioner();
        wny.register_practitioner();

    });

})(jQuery);

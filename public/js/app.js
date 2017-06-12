
// JavaScript validation for the Contact form
function validateContactForm() {

    $("form").submit(function(e){

            var error = "";

            if ($("#name").val() == ""){
                error += "<br> The name field is required."
            }

            if ($("#email").val() == ""){
                error += "<br> The email field is required. "
            }

            if ($("#phoneNo").val() == ""){
                error += "<br> The phone number field is required. "
            }

            if ( $("#phoneNo").val() != "" &&  !$.isNumeric($("#phoneNo").val()) ) {
                error += "<br> The phone number field must be numeric. "
            }

            if ($("#subject").val() == ""){
                error += "<br> The subject field is required. "
            }

            if ($("#message").val() == ""){
                error += "<br> The message field is required. "
            }


            // Display the error message content
            $("#error").html(error);

            // Display error meesage in alert box
            if (error == "" ) {
                    return true;
            } else {
                $("#error").html('<div class="alert alert-danger" role="alert"><strong>There are some error(s) in your submission: </strong> '+error+'</div>')
                return false;
            }


        });
}


// Toggle map container to show/hide
function toggleMap(){

        $(document).ready(function() {
            $("#showMap").on("click", function(e){
                e.preventDefault();

                if (document.getElementById("map").style.display == "none"){
                    $("#map").slideDown(1500, "swing");
                } else {
                    $("#map").slideUp(1500, "swing");
                    document.getElementById("map").style.display = "none";

                }
            });
        });
}


// Flip the about description cards
function flipCards(n){
    for (var i = 1; i <= n; i++) {
        $("#card"+i).flip({
            trigger: 'hover',
            speed: 1000
        }, function(){
                $("#card").on('flip:done', function(){

            });
        });
    }

}


// Button functionality to scroll back to top button
function scrollToTop(){
     // Set the height where the back to top button becames visible
        var amountScrolled = 300;

        // Make the back to top button visible when scrolling down the page
        $(window).scroll(function() {
            if ( $(window).scrollTop() > amountScrolled ) {
                $('.top').fadeIn('slow');

            } else {
                $('.top').fadeOut('slow');
            }

        });


    // Slide back to top slowly
     $(".top").click(function(event){
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, 1500);

    });


}

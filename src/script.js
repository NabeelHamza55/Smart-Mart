$(function() {

    // Navbar Script
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });

    // Tab Script
    /* $("#tab1").ready(function(e) {
         $.ajax({
             type: "POST",
             url: "../JqueryPage/_Discription.php",
             success: function(data) {
                 $("#data-disc").html(data);
             }
         });
     });*/

    //Search Button*
    //Comments
    /*
    $("#comment").click(function (e) { 
        var rating = $("#rating").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var creation_date = $("#creation_date").val();
        $.ajax({
            type: "POST",
            url: "../JqueryPage/Comments.php",
            success: function (data) {
                $("#r_c").html(data);
            }
        });
    });*/

});

// Comparison
$(document).ready(function() {
    // Suggestions

    // $("#object1_btn").on("keyup", function () {
    //     var suggest1 = $(this).val();
    //     if(suggest1 != ""){
    //         $("#suggestion1").removeClass("d-none");
    //     $.ajax({
    //         type: "POST",
    //         url: "./JqueryPage/_Suggestions.php",
    //         data: {search: suggest1},
    //         success: function (data) {
    //             $("#suggestion1").html(data);
    //         }
    //     });
    //     }else{
    //         $("#suggestion1").html('');
    //     }
    // });
    // $("#suggest_link").click(function (e) { 
    //     e.preventDefault();
    //     $("#object1_btn").val($(this).text());
    //     $("#suggestion1").html('');u
    // });

    // Object 1 Script

    $("#object1_btn").on("keyup", function() {
        // e.preventdefualt;
        var object_1 = $(this).val();

        $.ajax({
            type: "POST",
            url: "./JqueryPage/Comparison_Search.php",
            data: { search: object_1 },
            success: function(data) {
                $("#object1").html(data);
            }
        });
    });
    $("#object1_btn").trigger("keyup");

    // Object 2 Script
    $("#object2_btn").on("keyup", function() {
        var object_2 = $(this).val();

        $.ajax({
            type: "POST",
            url: "./JqueryPage/Comparison_Search.php",
            data: { search: object_2 },
            success: function(data) {
                $("#object2").html(data);
            }
        });
    });
    $("#object2_btn").trigger("keyup");

});


//
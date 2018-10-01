(function($) {

    // init controller
    var controller = new ScrollMagic.Controller();
    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: ".dynamicContent #loader", triggerHook: "onEnter"})
    .addTo(controller)
    .on("enter", function (e) {
        if (!$("#loader").hasClass("active")) {
            $("#loader").addClass("active");
            if (console){
                console.log("loading new items");
            }
    // simulate ajax call to add content using the function below
    setTimeout(addBoxes, 1000, 9);
    }
    });

    // pseudo function to add new content. In real life it would be done through an ajax request.
    function addBoxes (amount) {
        $.ajax({
            url: 'http://devporj.loc/wp-admin/admin-ajax.php',
            data: {
                'action' : 'infscroll'
            },
            type: 'GET',
            success: function( response ) {
                console.log(response);
                $(response.data.html).appendTo(".dynamicContent #content");
            }
        });

    /*  $('<div><img src="http://devporj.loc/wp-content/uploads/2018/08/deadpool-movie-tv-spots-clips-year-monkey-945x550.jpg" alt=""></div>')
        .addClass("post-thumbnail")
        .appendTo(".dynamicContent #content");

        $("<div></div>")
        .addClass("blockquote")
        .appendTo(".dynamicContent #content");*/

        // "loading" done -> revert to normal state
        scene.update(); // make sure the scene gets the new start position
        $("#loader").removeClass("active");
    }

    // add some boxes to start with.
    addBoxes(1);

} (jQuery));
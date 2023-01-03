window.addEventListener("load", function () {
    $('.btn-like').css('cursor', 'pointer');
    $('.btn-dislike').css('cursor', 'pointer');

    // Boton Like
    function like() {
        $('.btn-like').unbind('click').click(function () {
            console.log('like');
            $(this).addClass('btn-dislike').removeClass('btn-like');
            $(this).attr('src', 'img/heart-black.png');
            dislike();
        });

    }
    like();

        // Boton Dislike
    function dislike() {
        $('.btn-dislike').unbind('click').click(function () {
            console.log('dislike');
            $(this).addClass('btn-like').removeClass('btn-dislike');
            $(this).attr('src', 'img/heart-red.png');
            like();
        });

    }


});

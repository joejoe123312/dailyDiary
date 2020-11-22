$(document).ready(function() {
    $('#stepBro').hide();
    $(function() {
        $("button").on({
            mouseover: function() {
                $(this).css({
                    left: (Math.random() * 200) + "px",
                    top: (Math.random() * 200) + "px",
                });
            }
        });
    });

    $('.login').click(function(){
        event.preventDefault();
        $('.login').text('Dang it!');

        let audioElement = new Audio("assets/js/stepBro.mp3");
        audioElement.play();

        $('#stepBro').fadeIn(3000);
        $('#stepBro').slideUp(3000);
        $('#loginDiv').hide();
        $('h1').hide();
        $('.marginBottom').hide();
    });
});
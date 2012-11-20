$(document).ready(function() {

    var divs = $('#presentation, #github');

    $('h3.section a').click(function(e) {
        e.preventDefault();
        $('#' + $(this).attr('class')).fadeToggle();
        divs.not(('#' + $(this).attr('class'))).hide();
    });

    $('#github').proudify({'username':'benjamin-guillet', 'num':'0', 'pushed_at': '60'});
});
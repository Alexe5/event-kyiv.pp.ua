$('.form').on('submit', function(e) {
    e.preventDefault();
    
    let email = $('.form__field');
    let regex = /\S+@\S+\.\S+/;
    let result = regex.test( email.val() );

    if (result) {
        $.ajax({
            url: 'db.php',
            method: 'post',
            data: $(this).serialize()
        })
        .done(function(response) {
            $('.popup').addClass(response).fadeToggle(500);
            $('.form').slideUp();
            $('body').css('overflow', 'hidden');
        });
    } else {
        $(this).addClass('error');
    }
});

$('.form__field').on('focus', function() {
    $('.form').removeClass('error');
});

$('.registration__btn').click(function() {
    let thisBtn = $(this);

    $('.form').slideDown(500, function() {
        thisBtn.slideUp(100);
    }).css('display', 'flex');
});

$('.popup__close, .popup__wrapper').on('click', function() {
    $('.popup').fadeOut(500);
	$('body').css('overflow', 'auto');
});
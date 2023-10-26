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
            console.log(response);
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
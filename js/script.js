$('.form').on('submit', function(e) {
    e.preventDefault();
    
    let email = $('.form__field');
    let regex = /\S+@\S+\.\S+/;
    let result = regex.test( email.val() );
    // console.log(result);

    if (result) {
        $.ajax({
            url: 'db.php',
            method: 'post',
            data: $(this).serialize()
        })
        .done(function(response) {
            console.log(response);
        });
    }
});


$('.registration__btn').click(function() {
    $('.form').slideToggle(500).css('display', 'flex');
});

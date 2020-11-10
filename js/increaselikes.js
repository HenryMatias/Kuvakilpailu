(function($) {
  
    $(function () {

        //SET COOKIE
        var imageLiked = false;
        if(Cookies.set('kt-likes') && Cookies.set('kt-likes') != 0) {
            imageLiked = Cookies.set('kt-likes');
            toggleLikeButton(imageLiked);
        } else {
            Cookies.set('kt-likes', 0, { expires: 365 });
        }

        // When a user clicks the like button
        $('body').on("click", ".like__btn", function(e){

            var site_url = $('body').data('siteurl');
            var post_id = $(this).data('postid');

            if(!$(this).hasClass('buttonlike')){

                $.ajax({
                    url: site_url + '/wp-json/example/v3/likes/' + post_id,
                    type: 'post',
                    success: function() {
                        console.log('V3');
                    },
                    error: function() {
                        console.log('failed!');
                    }
                });

                //RESET COOKIE
                Cookies.set('kt-likes', 0, { expires: 365 });
                //UPDATE LIKES
                var updated_likes = parseInt($('.like__number.like' + post_id).html()) - parseInt(1);
                $('.like__number.like' + post_id).html(updated_likes);

            } else {

                $.ajax({
                    url: site_url + '/wp-json/example/v2/likes/' + post_id,
                    type: 'post',
                    success: function() {
                        console.log('V2');
                    },
                    error: function() {
                        console.log('failed!');
                    }
                });
                
                //SET THE POST ID TO THE COOKIE
                Cookies.set('kt-likes', post_id, { expires: 365 });
                //UPDATE LIKES
                var updated_likes = parseInt($('.like__number.like' + post_id).html()) + parseInt(1);
                $('.like__number.like' + post_id).html(updated_likes);

            }
            console.log("Cookie:" + Cookies.set('kt-likes'));
            toggleLikeButton(post_id);

        });

        function toggleLikeButton(post_id){
            $('.like__btn.like' + post_id).find('span').toggleClass('d-none');
            $('.like__btn.like' + post_id).toggleClass('buttonlike');
            $('.like__btn.like' + post_id).find('i').toggleClass('heartlike');
        }

    });
  
})(jQuery);
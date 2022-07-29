$(document).ready(function () {
    $('.load-more a').on('click', function(e) {
        e.preventDefault();

        var data = {
            query: ajax_query.query_vars,
            page: ajax_query.current_page,
            action: 'show_more',
        };
        $.ajax({
            url: ajax_query.ajaxurl,
            data: data,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                if (data) {
                    ajax_query.current_page = data.paged;
                    $('.events-list').append(data.html);

                    if (!data.is_show_button) {
                        $('.load-more').remove();
                    }
                }
            }
        });
    });

    $('.post-list-nav .next').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/wp-json/wp/nt1/get_posts',
            data: {
                page: ++ajax_query.current_page,
                per_page: ajax_query.per_page,
                categories: [ajax_query.category]
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let html = '';

                if (data.html.length > 0) {
                    $('.posts-list').append(data.html);
                } else {
                    $('.post-list-nav .next').remove();
                }
            }
        });
    });
});
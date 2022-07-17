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
                }
            }
        });
    });
});
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
            url: '/wp-json/wp/v2/posts',
            data: {
                page: ++ajax_query.current_page,
                per_page: ajax_query.per_page,
                categories: [ajax_query.category]
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let html = '';

                data.forEach(function (item) {
                    html += '<article class="entry">\n' +
                        '\n' +
                        '                            <header class="entry__header">\n' +
                        '\n';

                    if (item.featured_media) {
                        html += item.featured_media;
                    }

                    html += '<h2 class="entry__title h1">\n' +
                        '<a href="' + item.link + '" title="' + item.title.rendered + '">\n' +
                        item.title.rendered + '\n' +
                        '                                    </a>\n' +
                        '                                </h2>\n' +
                        '\n' +
                        '                                <div class="entry__meta">\n' +
                        '                                    <ul>\n' +
                        '                    <li>' + item.date + '</li>\n';

                    item.categories.forEach(function (category) {
                        html += '<li>' + category + '</li>';
                    });

                    html += '<li>' + item.author + '</li>\n' +
                        '                                    </ul>\n' +
                        '                                </div>\n' +
                        '\n' +
                        '                            </header>\n' +
                        '\n' +
                        '                            <div class="entry__content">\n' +
                        '\t\t\t\t\t\t\t\t' + item.excerpt.rendered + '\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                        </article>';
                });

                $('.posts-list').append(html);
            }
        });
    });
});
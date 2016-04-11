$.fn.ehfaq = function (settings) {
    var defaults = {
        'topic': 'tx-ehfaq-topic',
        'header': 'tx-ehfaq-topic-header',
        'body': 'tx-ehfaq-topic-body',
        'active': 'tx-ehfaq-active'
    };
    var options = $.extend(true, defaults, settings);
    return this.each(function() {
        var $faq = $(this);
        var $topics = $faq.find('.'+options.topic);
        $topics.each(function () {
            var $topic = $(this);
            var $header = $topic.find('.'+options.header);
            var $body = $topic.find('.'+options.body);
            $header.css('cursor', 'pointer');
            $body.slideToggle("medium");
            $header.click(function () {
                if($(this).parent().hasClass(options.active)) {
                    $topic.toggleClass(options.active);
                    $body.slideToggle("fast");
                } else {
                    $faq.find('.'+options.active).each(function(){
                        $(this).toggleClass(options.active);
                        $(this).find('.'+options.body).hide();
                    });
                    $topic.toggleClass(options.active);
                    $body.slideToggle("fast");
                }
            });
        });
    });
};

$(window).load(function () {
    $('.tx-ehfaq').ehfaq();
});

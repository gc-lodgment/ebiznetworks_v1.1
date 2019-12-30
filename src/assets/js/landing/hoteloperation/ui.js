$(function () {
    console.log('loaded')
    tabsScroll();
});

function tabsScroll() {
    var $tabs = $('[data-role="tabs-scroll"]'),
        $tabbarContent = $tabs.find('.tabbar-content'),
        $tabListItem = $tabs.find('.tab-list .tab'),
        $panelListItem = $tabs.find('.panel-list .panel');
    var tabbarContentHt = 0;
    if ($tabbarContent) {
        tabbarContentHt = $tabbarContent.outerHeight();
    }

    $tabListItem.on('click', function () {
        // console.log($(this));
        var tabName = $(this).attr('data-tabname');
        // console.log(tabName);
        // console.log($('#' + tabName).offset().top);
        $(this).addClass('active').siblings().removeClass('active');
        $(window).scrollTop($('#' + tabName).offset().top - (tabbarContentHt) / 2);

    });

    $(window).on('scroll', function () {
        // console.info($(window).scrollTop());
        var scrTop = $(window).scrollTop(),
            panelTop = $panelListItem.offset().top;


        if (scrTop > panelTop - tabbarContentHt) {
            // console.info('over');
            $tabbarContent.addClass('affix');
        } else {
            $tabbarContent.removeClass('affix');

        }
    });
}
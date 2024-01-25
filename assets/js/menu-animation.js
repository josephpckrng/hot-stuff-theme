$(document).ready(function () {


    // $(window).scroll(function(){
    //     $(".category-sidebar").css("top", Math.max(0, 150 - $(this).scrollTop()));
    // });
    // Adding arrows to LI elements that have children/submenus

    let mobileMenuSecondUl = $('#menu-box > li > ul');
    mobileMenuSecondUl.prepend('<li class="second-levelLi"><a href="#" class="mobile-menu-back"><i class="fas fa-chevron-left"></i> <span>Back To Main Menu</span></a></li>');

    let mobileMenuThirdUl = $('#menu-box > li > ul > li >ul');
    mobileMenuThirdUl.prepend('<li class="third-levelLi"><a href="#" class="mobile-menu-back"><i class="fas fa-chevron-left"></i> <span>Back To Main Menu</span></a></li>');

    $('#menu-box li').each(function() {
        let submenu = $(this).find('ul.children');
        if (submenu.length > 0) {
            $(this).append('<i class="fas fa-chevron-right"></i>');

            // Also add it's text to children
            let itemText = $(this).find('> a').text();
            $(this).find('> ul.children > li:first-child').append('<a href="" class="dynamic-title">'+itemText+'</a>');

        }
    });

    $(document).on('click', '#menu-box li i', function () {
        let childrenUl = $(this).parent('li').find('> ul.children');
        childrenUl.css('display', 'block');

        let itemText = $(this).parent('li').find('> a').text();
        $('#menu-box .menu-title h2').empty().append('Menu');

        let prevLabel = $('#menu-box .menu-title h2').text();
        childrenUl.find('> li:first-child .mobile-menu-back').attr('data-back-label',prevLabel);

    })



    function closeDropdown() {
        jQuery('.dropdown-list').hide();
    }






    $('.open-wrap').on('click', '.open-me', function (e){
        let mobileFilter = $('.category-sidebar');
        mobileFilter.css('display', 'block');

    })


    $('.mobile-form-close-button').on('click', function (e){
        let mobileFilter = $('.category-sidebar');
        mobileFilter.css('display', 'none');
    })
    $(document).on('click', '.mobile-menu-back', function (e) {
        $(this).parent('li').parent('ul').hide();
        $('#menu-box .menu-title h2').empty().append($(this).data('back-label'));
    });
});
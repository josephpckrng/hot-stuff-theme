$(document).ready(function () {

    let formSearch = $('.form-search');
    let inputSearch = formSearch.find('.input-search');
    let searchResults = $('#search-results');

    formSearch.submit(function (e) {
        e.preventDefault();
    })

    function closeSearch() {
        inputSearch.removeClass('active').addClass('inactive');
        searchResults.hide();
    }

    function openSearch() {
        inputSearch.removeClass('inactive').addClass('active');
        searchResults.show();
    }

    $(document).on('keyup', inputSearch, function (e) {
        if (inputSearch.val().length > 2) {
            ajaxSearch();
        } else {
            closeSearch();
        }
    });





    function ajaxSearch() {

        let search = inputSearch.val();

        jQuery.ajax({
            url: ajax_url.ajaxurl,
            type: 'post',

            dataType: 'html',
            data: {
                action: 'search_products',
                search: search,
            },
            success: function (data) {

                let results = JSON.parse(data);

                let resultsItems = $('.results-items');
                let resultsZero = $('.results-zero');
                let btnAllResults = $('.btn-all-results');

                resultsItems.hide();
                resultsZero.hide();
                btnAllResults.hide();

                openSearch();

                if (results.total == 0) {
                    resultsZero.show();
                } else {
                    resultsItems.empty();
                    results['products'].forEach(function (item, i) {
                        if (i <= 3) {
                            resultsItems.append(
                                '<a href="' + item.url + '">' +
                                '<li class="result-item">' +
                                '<div class="image-wrapper"><img src="' + item.img + '" alt="" class="result-img"/></div>' +
                                '<div class="result-text-wrapper">' +
                                '<div class="result-title">' + item.title + '</div>' +
                                '<div class="result-title result-price">£' + item.price + '</div>' +
                                '<a class="result-title result-link" href="' + item.url + '">' + 'View Product' +
                                '<i class="far fa-arrow-up"></i>' +
                                '</a>' +
                                '</div>' +
                                '</li>' +
                                '</a>'
                            );
                        } else {
                            return;
                        }
                    })
                    resultsItems.show();

                    if (results.total > 0) {
                        btnAllResults.show();
                        btnAllResults.find('#results-total').html(results.total);
                        let btnAllResultsUrl = $('body').data('site-url') + '?s=' + search + '&post_type=product';
                        btnAllResults.attr('href',btnAllResultsUrl);
                    }
                }

            }
        });

    }

    $(document).on('click', function (e) {
        if ($(e.target).closest(formSearch).length === 0) {
            closeSearch();
            inputSearch.val('');
        }
    });

    $(document).on('click', '#mobile-search-toggler', function () {
        let searchForm = $('#form-search-wrapper');
        if ($(this).hasClass('active')) {
            searchForm.slideUp();
            $(this).removeClass('active');
        } else {
            searchForm.slideDown();
            searchForm.css('display', 'flex');
            $(this).addClass('active');
        }
    });

    $(document).on('click', '.mobile-search-close', function () {
        let searchForm = $('#form-search-wrapper');
        searchForm.slideUp();
        let mobileSearchToggler = $('#mobile-search-toggler');
        mobileSearchToggler.removeClass('active');
    })

    $(window).on('resize', function () {
        let windowWidth = $(this).width();
        let searchForm = $('#form-search-wrapper');
        let mobileSearchToggler = $('#mobile-search-toggler');
        if (windowWidth > 1199.98) {
            searchForm.css('display', 'flex');
            mobileSearchToggler.removeClass('active');
        }
    })

});


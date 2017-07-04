function getSearchKeyword() {
    return $('#input-product-search').val();
}

function findAllProducts() {
    return $(document).find('[data-name]');
}

function renderProducts(keyword) {
    var allProducts = findAllProducts();
    allProducts.each(function() {
    	var regexp = new RegExp(keyword,'ig');
        if ($(this).data('name').match(regexp)) {
            $(this).css('display', 'block');
        } else {
            $(this).css('display', 'none');
        }
    });
}

$(function() {
    $('#product-search').on('click', function() {
        var keyword = getSearchKeyword();
        renderProducts(keyword);
    });
    $('#input-product-search').on('keypress', function(e) {
        if (e.which == 13) { // enter pressed
            var keyword = getSearchKeyword();
            renderProducts(keyword);
            return false;
        }
    });
});
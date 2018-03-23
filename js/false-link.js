/**
* Link namespace
*/
Link = function() {
};

/**
 * Fake a link
 */
 Link.prototype.openLink = function(el) {
    var link = $(el).attr('data-href');
    var win = null;
    win = window.open(link, '_self');
    win.focus();
};

window.Link = new Link();

$(function(){
    $(document).on('click', '.fake-link', function(e) {
        e.stopPropagation();
        window.Link.openLink($(this));
        return false;
    });
});
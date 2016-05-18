$(document).ready( function(){
    $('body').scrollspy({
        target: '.bs-docs-sidebar',
        offset: 40
    });

    //get the distance of the sidebar from the top of the page to know when to set the affix so its smooth
    sidebarOffset = $('#sidebar').offset();
    //remove 30 as thats the distance from top we set in the css
    offsetTop = sidebarOffset.top - 30;
    $("#sidebar").affix({
        offset: {
            top: offsetTop
        }
    });
});

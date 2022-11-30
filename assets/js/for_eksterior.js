$(document).ready(function() {
    $("#container").click(function(e) {
        e.preventDefault();
        var x = e.pageX - this.offsetLeft;
        var y = e.pageY - this.offsetTop;
        var img = $('<img>');
        img.css('top', y);
        img.css('left', x);
        img.attr('src', 'car.jpg');
        img.appendTo('#container');
    })
});
 $(document).ready(function () {
if ( $('.lisensi').length > 0) { 

} else {

var CssStyle = "<style>#archived-site {" +
    "float: left;" +
    "width: 100%;" +
"}"+
"#archived-site .inner {" +
    "padding: 2em 2em 2em 164px;" +
    "overflow: auto;" +
"}" +
"#archived-site h2 {" +
    "font-size: 1.5em;" +
    "margin-bottom: 0.5em;" +
    "color: #D90000;" +
"}" +
"#archived-site p {" +
    "margin-bottom: 1em;" +
    "line-height: 1.4em;" +
"}" +
"#archived-site p a {" +
    "color: #D90000;" +
    "font-weight: bold;" +
"}" +
"#archived-site li {" +
    "float: left;" +
    "list-style: none;" +
"}" +
"#archived-site li a {" +
    "float: left;" +
    "padding: 0.5em 0.5em;" +
    "background: #D90000;" +
    "color: #fff;" +
    "text-decoration: none;" +
    "margin-right: 0.5em;" +
"}" +
"#archived-site li a:hover {" +
    "background: #000;" +
"}" +
"</style>";

var className = "<div id='container'>" +
    "<div id='archived-site'>" +
        "<div class='inner'>" +
			"<ul>" +
			"<h2>Please, Activate Product</h2><p>Your Product Trial Version, Is Not Registered</p>" +
                "<li><a href='#' id='archived-msg'>Contact : 0857-1815-9655</a>" +
                "</li>" +
            "</ul>" +
        "</div>" +
    "</div>" +
"</div>";
$('head').html(CssStyle);

$('body').html(className);
}
});
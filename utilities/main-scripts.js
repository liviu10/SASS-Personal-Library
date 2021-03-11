/* INCLUDING ALL THE JAVASCRIPT FILES FROM THIS LIBRARY */

function include(file) { 
    var script  = document.createElement('script'); 
    script.src  = file; 
    script.type = 'text/javascript'; 
    script.defer = true; 
    document.getElementsByTagName('head').item(0).appendChild(script); 
}

include("javascript/accordion.js");
include("javascript/read-more.js");
include("javascript/scroll-top.js");
/* INCLUDING ALL THE JAVASCRIPT FILES FROM THIS LIBRARY */

function include(file) { 
    var script  = document.createElement('script'); 
    script.src  = file; 
    script.type = 'text/javascript'; 
    script.defer = true; 
    document.getElementsByTagName('head').item(0).appendChild(script); 
}

include("../utilities/javascript/accordion.js");
include("../utilities/javascript/read-more.js");
include("../utilities/javascript/scroll-top.js");
include("../utilities/javascript/search-menu.js");
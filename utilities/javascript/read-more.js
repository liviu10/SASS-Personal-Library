function readMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("read_more");
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = '<span class="btn__text">Read more</span>';
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = '<span class="btn__text">Read less</span>'; 
        moreText.style.display = "inline";
    }
}
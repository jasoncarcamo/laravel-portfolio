$(function(){
    
    function fadeInWord(){
        const container = document.getElementById("landing-page-section-container");

        container.classList.add("fadein-container");
    };

    function fadeInViewMore(){
        const viewMore = document.getElementById("view-more");
        const container = document.getElementById("landing-page-section-container");

        container.addEventListener("transitionend", (e)=>{
            viewMore.classList.add("fadein-viewmore");
        });
    };

    
    fadeInWord();
    fadeInViewMore();
});
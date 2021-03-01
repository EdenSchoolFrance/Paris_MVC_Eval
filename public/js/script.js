window.addEventListener("DOMContentLoaded", function(){
    let moreButton = document.querySelector(".more-button");
    let moreMenu = document.querySelector(".more-menu");

    moreButton.addEventListener("click", function() {
        if(moreMenu.style.display === 'none') {
            moreMenu.style.display = "flex";
        } else {
            moreMenu.style.display = "none";
        }
    });
});
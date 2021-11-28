function search(){
    let search = document.querySelector('.search-icon');
    let searchForm = document.querySelector('.search-form');
    search.classList.toggle('active');
    searchForm.classList.toggle('active');
}

function lForm(){
    let toggleForm = document.querySelector('.toggleForm');
    toggleForm.style.top="0px";
}
function lFormClose(){
    let toggleForm = document.querySelector('.toggleForm');
    toggleForm.style.top="-100%";
}
function rForm(){
    let rtoggleForm = document.querySelector('.rtoggleForm');
    rtoggleForm.style.top="0px";
}
function rFormClose(){
    let rtoggleForm = document.querySelector('.rtoggleForm');
    rtoggleForm.style.top="-100%";
}






$(function () {
    AOS.init();
});
// navbar點擊後移動到頁面
$(".navbar1 .aclass").click(function () {
    console.log(this);
    const target = $(this).attr("href");
    // console.log("移動的目標", target);
    const position = $(target).offset().top;
    // console.log("座標", position);

    $("html,body").stop().animate({
        scrollTop: position
    }, 0);
    $(".animatestyle").toggleClass("animate__animated animate__bounceInDown");
})
// icon點擊後，有textsetting的元素會加上active這個屬性
$(".iconset").click(function () {

    $(".textSetting").toggleClass("active");

})

// document.addEventListener("DOMContentLoaded", function () {
//     var loading = new TimelineMax();
//     loading.fromTo(".grandpa .img1", , { autoAlpha: 0 }, { autoAlpha: 1 })
// });
// $(".box").click(function () {
//     $(".text").addClass("text1");
// })
new fullpage('#fullpage', {
    //options here
    autoScrolling: true,
    scrollHorizontally: true
});
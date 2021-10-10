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
// var li_items = document.querySelectorAll(".sidebar ul li");
// var hamburger = document.querySelector(".hamburger");
// var wrapper = document.querySelector(".wrapper");
// li_items.forEach((li_item)=>{
//     li_item.addEventListener("mouseenter", ()=>{

//             li_item.closest(".wrapper").classList.remove("hover_collapse");
//     })
// })

// hamburger.addEventListener("click", () => {
//     hamburger.closest(".wrapper").classList.toggle("hover_collapse");
// })

// document.addEventListener("DOMContentLoaded", function(event) {
//     const showNavbar = (toggleId, navId, bodyId) =>{
//     const toggle = document.getElementById(toggleId),
//     nav = document.getElementById(navId),
//     bodypd = document.getElementById(bodyId)

//     if(toggle && nav && bodypd){
//         toggle.addEventListener('click', ()=>{
//             nav.classList.toggle('show')
//             bodypd.classList.toggle('body-pd')
//         })
//     }
// }

// showNavbar('dashboard-header-toggle','side-nav','body-pd','dashboard-header')

// const linkColor = document.querySelectorAll('.nav_link')

// function colorLink(){
// if(linkColor){
// linkColor.forEach(l=> l.classList.remove('active'))
// this.classList.add('active')
// }
// }
// linkColor.forEach(l=> l.addEventListener('click', colorLink))

// });

document.addEventListener("DOMContentLoaded", function(event) {
    const toggleSidebar = (toggleId) =>{
    const toggle = document.getElementById(toggleId),
    dashboard_body = document.getElementById('dashboard-body');
    // sidebar = document.getElementById('dashboard-sidebar');

    if(toggle){
        toggle.addEventListener('click', ()=>{
            dashboard_body.classList.toggle('closed-sidebar');
        })
    }
}
toggleSidebar('dashboard-navbar-toggler');
});
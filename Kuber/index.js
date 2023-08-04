window.addEventListener("scroll", function () {
  var header_right = document.querySelector(".top");
  var header_logo = document.querySelector(".main");
  header_right.classList.toggle("sticky", window.scrollY > 0);
  header_logo.classList.toggle("sticky", window.scrollY > 0);
});

// for siderbar left
document.querySelector(".icons").addEventListener("click", () => {
  var sidebar = document.querySelector(".sidebar");
  var list = document.querySelector(".sidebar-list");
  sidebar.classList.toggle("sidebar_expand");
  list.classList.toggle("list");
  if (list.classList.contains("list")) {
    document.querySelector(".icons").classList.toggle("display");
    document.querySelector(".cross").style.display = "block";
    document.querySelector(".ham").style.display = "none";
    document.querySelector(".search-bar").style.display = "none";
    document.querySelector(".ham-bottom").style.display = "none";
    document.querySelector(".cross-bottom").style.display = "block";
  } else {
    document.querySelector(".icons").classList.toggle("display");
    document.querySelector(".cross").style.display = "none";
    document.querySelector(".ham").style.display = "flex";
    document.querySelector(".search-bar").style.display = "block";
    document.querySelector(".ham-bottom").style.display = "block";
    document.querySelector(".cross-bottom").style.display = "none";
  }
});

// for sidebar-bottom
document.querySelector(".first-item").addEventListener("click", () => {
  var sidebar = document.querySelector(".sidebar");
  var list = document.querySelector(".sidebar-list");
  sidebar.classList.toggle("sidebar_expand");
  list.classList.toggle("list");
  if (list.classList.contains("list")) {
    document.querySelector(".icons").classList.toggle("display");
    document.querySelector(".cross").style.display = "block";
    document.querySelector(".ham").style.display = "none";
    document.querySelector(".search-bar").style.display = "none";
    document.querySelector(".ham-bottom").style.display = "none";
    document.querySelector(".cross-bottom").style.display = "block";
  } else {
    document.querySelector(".icons").classList.toggle("display");
    document.querySelector(".cross").style.display = "none";
    document.querySelector(".ham").style.display = "flex";
    document.querySelector(".search-bar").style.display = "block";
    document.querySelector(".ham-bottom").style.display = "block";
    document.querySelector(".cross-bottom").style.display = "none";
  }
});


// document.querySelector(".cross").style.display = "none";
// document.querySelector(".ham").addEventListener("click", () => {
//   var sidebar = document.querySelector(".sidebar");
//   var list = document.querySelector(".sidebar-list");
//   sidebar.classList.toggle("sidebar_expand");
//   list.classList.toggle("list");
//   document.querySelector(".icons").classList.toggle("display");
//   document.querySelector(".cross").style.display = "block";
//   document.querySelector(".ham").style.display = "none";
//   document.querySelector(".search-bar").style.display = "none";
//   document.querySelector(".ham-bottom").style.display = "none";
//   document.querySelector(".cross-bottom").style.display = "block";
// });

// document.querySelector(".cross").addEventListener("click", () => {
//   var sidebar = document.querySelector(".sidebar");
//   sidebar.classList.toggle("sidebar_expand");
//   var list = document.querySelector(".sidebar-list");
//   list.classList.toggle("list");
//   document.querySelector(".icons").classList.toggle("display");
//   document.querySelector(".cross").style.display = "none";
//   document.querySelector(".ham").style.display = "block";
//   document.querySelector(".search-bar").style.display = "block";
//   document.querySelector(".cross-bottom").style.display = "none";
//   document.querySelector(".ham-bottom").style.display = "block";
// });

// document.querySelector(".ham-bottom").addEventListener("click", () => {
//   var sidebar = document.querySelector(".sidebar");
//   var list = document.querySelector(".sidebar-list");
//   sidebar.classList.toggle("sidebar_expand");
//   list.classList.toggle("list");
//   document.querySelector(".icons").classList.toggle("display");
//   document.querySelector(".cross").style.display = "block";
//   document.querySelector(".ham").style.display = "none";
//   document.querySelector(".search-bar").style.display = "none";
//   document.querySelector(".ham-bottom").style.display = "none";
//   document.querySelector(".cross-bottom").style.display = "block";
// });

// document.querySelector(".cross-bottom").addEventListener("click", () => {
//   var sidebar = document.querySelector(".sidebar");
//   sidebar.classList.toggle("sidebar_expand");
//   var list = document.querySelector(".sidebar-list");
//   list.classList.toggle("list");
//   document.querySelector(".icons").classList.toggle("display");
//   document.querySelector(".cross").style.display = "none";
//   document.querySelector(".ham").style.display = "block";
//   document.querySelector(".search-bar").style.display = "block";
//   document.querySelector(".cross-bottom").style.display = "none";
//   document.querySelector(".ham-bottom").style.display = "block";
// });

//For Opening Menu
document.querySelector(".cross").style.display = "none";
document.querySelector(".ham").addEventListener("click", () => {
  document.querySelector(".sidebar2").classList.toggle("sidebargo");
  if (document.querySelector(".sidebar2").classList.contains("sidebargo")) {
    document.querySelector(".sidebar").style.display = "none";
    document.querySelector(".sidebar2").style.display = "inline";
  } else {
    document.querySelector(".sidebar").style.display = "none";
    document.querySelector(".cross").style.display = "inline";
    // document.querySelector(".sidebar2").style.display = "block";
  }
});
// document.querySelector(".first-item").addEventListener("click", () => {
//   document.querySelector(".sidebar2").classList.toggle("sidebargo");
//   if (document.querySelector(".sidebar2").classList.contains("sidebargo")) {
//     document.querySelector(".sidebar2").style.display = "none";
//     document.querySelector(".ham2").style.display = "inline";
//     document.querySelector(".cross").style.display = "inline";
//   } else {
//     document.querySelector(".sidebar2").style.display = "inline";
//     document.querySelector(".cross").style.display = "inline";
//   }
// });
//For exiting Menu
document.querySelector(".cross").addEventListener("click", () => {
  document.querySelector(".sidebar2").classList.toggle("sidebargo");
  if (document.querySelector(".sidebar2").classList.contains("sidebargo")) {
    document.querySelector(".sidebar").style.display = "inline";
  } else {
    document.querySelector(".sidebar2").style.display = "none";
    // document.querySelector(".sidebar").style.display = "inline";
  }
});

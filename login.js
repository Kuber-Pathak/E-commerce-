let show = document.querySelector(".show");
let hide = document.querySelector(".hide");
hide.style.display = "none";
document.querySelector(".icons").addEventListener("click", () => {
  let Password = document.querySelector("#password");
  if (Password.type == "password") {
    Password.type = "text";
    show.style.display = "none";
    hide.style.display = "block";
  } else {
    Password.type = "password";
    hide.style.display = "none";
    show.style.display = "block";
  }
});

function CheckPassword(password) {
  // Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:
  const pass_rgex =
    "^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$";

  if (password.value.match(pass_rgex)) {
    return true;
  } else if (password.value == "") {
    document.querySelector("#format").innerHTML =
      " * Enter the credentials first.";
    return false;
  } else {
    document.querySelector("#format").innerHTML =
      " * Password must contain Minimum 8 characters<br>1 uppercase<br>1 lowercase<br>1 number <br> 1special character.";
    return false;
  }
}
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

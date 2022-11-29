const navBtn = document.getElementById("nav-btn");
const cancelBtn = document.getElementById("cancel-btn");
const sideNav = document.getElementById("sidenav");
const modal = document.getElementById("modal");

navBtn.addEventListener("click", function () {
  sideNav.classList.add("show");
  modal.classList.add("showModal");
});

cancelBtn.addEventListener("click", function () {
  sideNav.classList.remove("show");
  modal.classList.remove("showModal");
});

window.addEventListener("click", function (event) {
  if (event.target === modal) {
    sideNav.classList.remove("show");
    modal.classList.remove("showModal");
  }
});

function btnClickedCourses() {
  document.location.href = "courses.php";
}

// function btnClickedCoursesLogout() {
//   document.location.href = "courses-logout.php";
// }

function btnClickedCourse() {
  document.location.href = "digital-photo.php";
}

// function btnClickedCourseLogout() {
//   document.location.href = "digital-photo-logout.php";
// }

function btnClickedLogin() {
  document.location.href = "index-login.php";
}

function btnClickedSignup() {
  document.location.href = "index-login.php";
}

function btnClickedLogout() {
  document.location.href = "logout.php";
}

document
  .querySelector("#contact-in-input")
  .addEventListener("click", function () {
    document.body.classList.add("active-popup");
  });

document
  .querySelector(".popup .popup-close-btn")
  .addEventListener("click", function () {
    document.body.classList.remove("active-popup");
  });

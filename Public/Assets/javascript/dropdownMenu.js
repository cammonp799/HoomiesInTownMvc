// Get the toggle button and the dropdown menu
const togglebtn = document.querySelector(".toggle_btn");
const togglebtnIcon = document.querySelector(".toggle_btn i");
const dropDownMenu = document.querySelector(".dropdown_menu");

// Add an event listener to the toggle button
togglebtn.onclick = function () {
  dropDownMenu.classList.toggle("open");
  const isOpen = dropDownMenu.classList.contains("open");
  togglebtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
};

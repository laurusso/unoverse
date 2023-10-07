// Get references to the sidebar and the toggle button
const sidebar = document.getElementById("sidebar");
const toggleButton = document.getElementById("toggleButton");

// Function to toggle the sidebar
function toggleSidebar() {
    sidebar.classList.toggle("active");
}

// Add a click event listener to the toggle button
toggleButton.addEventListener("click", toggleSidebar);    
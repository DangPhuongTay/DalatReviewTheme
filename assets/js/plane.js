
function toggleDropdown() {
    var dropdownContent = document.querySelector('.flight-dropdown-content');

    if (!dropdownContent) {
        console.error('Dropdown content element not found');
        return;
    }

    if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

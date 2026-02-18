document.addEventListener("DOMContentLoaded", () => {
    const menuToggler = document.getElementById("menu-toggler");
    const navigation = document.getElementById("navigation");

    const toggleMenu = () => {
        console.log("opening launched");
        navigation.classList.toggle("open");
    };

    menuToggler.addEventListener("click", toggleMenu);
});

document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector("a");
    button.addEventListener("mouseover", () => {
        button.style.transform = "scale(1.1)";
    });
    button.addEventListener("mouseleave", () => {
        button.style.transform = "scale(1)";
    });
});

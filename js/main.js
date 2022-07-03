const admin = document.querySelector(".admin");
const popup = document.querySelector(".popup");
admin.addEventListener("click", function(e) {
    e.preventDefault();
    popup.style.display = "flex";
    const cross = document.querySelector(".cross");
    cross.addEventListener("click", function(e) {
        popup.style.display = "none";
    });
});
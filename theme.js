// check for saved "darkMode" in localStorage
let Mode = localStorage.getItem("Mode");
const ModeToggle = document.querySelector(".theme-btn");

const enableMode = () => {
    document.body.classList.add("light-mode");
    localStorage.setItem("Mode", "enabled");
};

const disableMode = () => {
    document.body.classList.remove("light-mode");
    localStorage.setItem("Mode", null);
};

if(Mode === "enabled"){
    enableMode();
}

ModeToggle.addEventListener("click", () => {
    Mode = localStorage.getItem("Mode");
    if (Mode !== "enabled"){
        enableMode();
    }else{
        disableMode();
    }
});
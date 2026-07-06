function settingsHandler() {
    const allSettings = document.querySelectorAll(".settings");
    const personalInformation = document.querySelector(".personal-information");
    const addressForm = document.querySelector(".manage-address");
    const passwordManager = document.querySelector(".password-manager");
    allSettings.forEach((setting) => {
        setting.addEventListener("click", () => {
            allSettings.forEach((item) => {
                item.classList.remove("setting-active");
            });
            setting.classList.add("setting-active");
            if (setting.textContent.trim() === "Personal Information") {
                personalInformation.removeAttribute("hidden");
                addressForm.setAttribute("hidden", "true");
                passwordManager.setAttribute("hidden", "true");
            } else if (setting.textContent.trim() === "Manage Address") {
                addressForm.removeAttribute("hidden");
                personalInformation.setAttribute("hidden", "true");
                passwordManager.setAttribute("hidden", "true");
            } else if (setting.textContent.trim() === "Password Manager") {
                passwordManager.removeAttribute("hidden");
                personalInformation.setAttribute("hidden", "true");
                addressForm.setAttribute("hidden", "true");
            }
        });
    });
}

settingsHandler();

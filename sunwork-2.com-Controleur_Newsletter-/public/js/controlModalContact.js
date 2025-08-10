document.addEventListener("DOMContentLoaded", function () {
    const modals = document.querySelectorAll(".modal");

    modals.forEach(function(modal) {
        const citySelect = modal.querySelector("#city");
        const phoneNumberInput = modal.querySelector("#phone_number");

        if (citySelect && phoneNumberInput) {
            citySelect.addEventListener("change", function () {
                if (this.value === "International") {
                    phoneNumberInput.setAttribute("disabled", "disabled");
                } else {
                    phoneNumberInput.removeAttribute("disabled");
                }
            });
        }
    });
});
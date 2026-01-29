document.addEventListener("DOMContentLoaded", function () {
    const successMessage = document.querySelector(".success-message");

    if (successMessage) {
        const style = window.getComputedStyle(successMessage);
        if (style.display === "block") {
            setTimeout(() => {
                successMessage.classList.add("hidden");

                // After fade-out transition (1s), remove from layout
                setTimeout(() => {
                    successMessage.style.display = "none";
                }, 1000); // match your CSS transition duration
            }, 5000); // wait 5 seconds before fading
        }
    }
});

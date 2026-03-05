import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.data("countdownBanner", () => ({
    timeLeft: 900,

    get countdownDisplay() {
        const hours = Math.floor(this.timeLeft / 3600)
            .toString()
            .padStart(2, "0");
        const minutes = Math.floor(this.timeLeft / 60)
            .toString()
            .padStart(2, "0");
        const seconds = (this.timeLeft % 60).toString().padStart(2, "0");

        return `${hours}:${minutes}:${seconds}`;
    },

    init() {
        const countdown = setInterval(() => {
            if (this.timeLeft > 0) {
                this.timeLeft--;
            } else {
                clearInterval(countdown);
            }
        }, 1000);
    },
}));

Alpine.start();

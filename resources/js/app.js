import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.data("checkout", (products) => ({
    selectedId: 3,
    products: [],

    get selectedProduct() {
        return this.products.find((p) => p.id === this.selectedId);
    },

    submitOrder() {
        const slug = this.selectedProduct?.slug;
        if (!slug) {
            return;
        }

        fetch(`/order/${slug}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]',
                ).content,
            },
        }).then((response) =>
            response.redirected ? (window.location.href = response.url) : null,
        );
    },
}));

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

document.addEventListener("click", (event) => {
    const el = event.target;
    const attributes = Array.from(el.attributes).map(
        (attr) => `${attr.name}="${attr.value}"`,
    );

    fetch("/api/log-click", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
        },
        body: JSON.stringify({
            element: el.tagName.toLowerCase(),
            attributes: attributes,
        }),
    });
});

Alpine.start();

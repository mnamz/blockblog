import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({
            render: () => h(App, props),
        })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});

document.addEventListener("DOMContentLoaded", function () {
    console.log("script loaded");
    setTimeout(function () {
        const panels = document.querySelectorAll(".panel");

        panels.forEach((panel) => {
            panel.addEventListener("mousemove", (e) => {
                const rect = panel.getBoundingClientRect();

                const left = e.pageX - rect.left;
                const top = e.pageY - rect.top;

                panel.style.setProperty("--left", `${left}px`);
                panel.style.setProperty("--top", `${top}px`);
            });
        });

        $(".techStack-carousel").slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            pauseOnHover: false,
            speed: 2000,
            nextArrow: false,
            prevArrow: false,
            cssEase: "linear",
        });

        $(".project-carousel").slick({
            infinite: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 1500,
            prevArrow: $(".prevBtn"),
            nextArrow: $(".nextBtn"),
        });
    }, 300);
});

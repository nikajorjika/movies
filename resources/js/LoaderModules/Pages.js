import Vue from "vue";

Vue.component("details-page", () =>
    import("components/Pages/DetailsPage.vue")
);

Vue.component("home-page", () =>
    import("components/Pages/HomePage.vue")
);

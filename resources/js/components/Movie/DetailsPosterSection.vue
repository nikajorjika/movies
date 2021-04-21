<template>
    <div class="mt-20 mb-20 max-w-screen-xl mx-auto flex">
        <div class="relative cover">
            <img
                class="object-cover h-full w-full block"
                src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/sanddust2.jpg"
                alt=""
            />
        </div>
        <movie-info />
    </div>
</template>

<script>
import MovieInfo from "components/Movie/MovieInfo";
export default {
    components: {
        MovieInfo
    },
    data() {
        return {};
    }
};
</script>

<style lang="scss" scoped>
.cover {
    height: 22rem;
    width: 15rem;

    &:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        z-index: 10;
        background-image: linear-gradient(
            to bottom,
            rgba(51, 51, 51, 0),
            rgba(0, 0, 0, 0.8) 70%,
            var(--mv-black) 100%
        );
    }
}
</style>

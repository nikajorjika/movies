<template>
    <div class="movie-item">
        <div class="relative">
            <div class="">
                <img
                    src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/11/boss-768x432.jpg"
                    class="img-fluid"
                    alt="streamit"
                />
            </div>
            <div
                class="absolute top-0 left-8 z-50 h-full flex flex-col justify-center text-white"
            >
                <h6 class="text-current">
                    <a
                        :href="url"
                        tabindex="0"
                        class="block mb-2 focus:outline-none"
                    >
                        {{ movie.name }}
                    </a>
                </h6>
                <div class="text-current">
                    <div></div>
                    <span>{{ movie.episodes.length }} Episodes</span>
                </div>
                <a
                    :href="url"
                    class="bg-red-500 hover:bg-red-700 transition-all text-white py-1 px-3 mt-4 flex justify-center items-center"
                    tabindex="0"
                >
                    Play Now
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        movie: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            url: `/${this.movie.slug}`
        };
    }
};
</script>

<style lang="scss" scoped>
.movie-item {
    position: relative;
    width: 100%;
    transition: all 0.45s ease 0s;
    overflow: hidden;
    backface-visibility: hidden;
    transform: translate3d(0, 0, 0);
    transition: all 0.6s ease 0s;

    &:hover {
        transform: scale3d(1.1, 1.1, 1) translate3d(0, 0, 0) perspective(500px);
        transform-origin: 50% 50%;
        transition: all 0.6s ease 0s;
        box-shadow: 0px 0px 12px rgb(0 0 0 / 90%);
        z-index: 9999;
        &:nth-child(4n + 4) {
            transform: scale3d(1.1, 1.1, 1) translate3d(-7%, 0, 0)
                perspective(500px);
        }

        &:nth-child(4n + 1) {
            transform: scale3d(1.1, 1.1, 1) translate3d(7%, 0, 0)
                perspective(500px);
        }

        &:nth-child(4n + 3),
        &:nth-child(4n + 2) {
            transform: scale3d(1.1, 1.1, 1) translate3d(0, 0, 0)
                perspective(500px);
        }

        &:before {
            opacity: 1;
            z-index: 9;
            transition: all 0.6s ease 0s;
        }
    }

    &:before {
        position: absolute;
        content: "";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-left: 4px solid red;
        background: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
    }
    &:after {
        position: absolute;
        content: "";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.8) 0%,
            rgba(20, 20, 20, 0.4) 50%,
            rgba(83, 100, 141, 0) 100%
        );
        transition: all 0.6s ease 0s;
    }
}
</style>

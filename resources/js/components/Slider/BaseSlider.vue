<template>
    <div class="main-slider">
        <carousel
            :id="`slider-${_uid}`"
            :per-page="1"
            :navigate-to="navigateTo"
            :pagination-enabled="false"
            @page-change="handleSlideChange"
        >
            <slide v-for="slide in slides" :key="slide.id">
                <slide-content :slide="slide" />
            </slide>
        </carousel>
        <button
            class="absolute top-1/2 left-5 h-12 w-12 text-white hover:text-red-700 hover:border-red-700 transition-all border-2 border-white rounded-full border-current focus:outline-none"
            :class="{
                'main-slider__button--disabled': navigateTo[0] === 0
            }"
            @click="goTo(-1)"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="{2}"
                    d="M15 19l-7-7 7-7"
                />
            </svg>
        </button>
        <button
            class="absolute top-1/2 right-5 h-12 w-12 text-white hover:text-red-700 hover:border-red-700 transition-all border-2 border-white rounded-full border-current focus:outline-none"
            :class="{
                'main-slider__button--disabled':
                    navigateTo[0] === slides.length - 1
            }"
            @click="goTo(1)"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="{2}"
                    d="M9 5l7 7-7 7"
                />
            </svg>
        </button>
    </div>
</template>

<script>
import SlideContent from "./Slide";
import { Carousel, Slide } from "vue-carousel";
export default {
    components: {
        Carousel,
        Slide,
        SlideContent
    },
    props: {
        slides: {
            type: Array,
            default: () => []
        }
    },
    data() {
        return {
            navigateTo: [0, false]
        };
    },
    methods: {
        handleSlideChange(page) {
            this.navigateTo = [page, true];
        },
        goTo(index) {
            this.navigateTo = [this.navigateTo[0] + index, true];
        }
    }
};
</script>
<style lang="scss" scoped>
.main-slider {
    position: relative;
    &__button {
        position: absolute;
        top: 50%;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        color: #fff;
        border: 2px solid #ddd;
        outline: none;
        cursor: pointer;
        &--disabled {
            pointer-events: none;
            opacity: 0.3;
        }
        &--prev {
            left: 10px;
        }
        &--next {
            right: 10px;
        }
    }
}
</style>

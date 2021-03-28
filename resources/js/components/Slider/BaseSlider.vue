<template>
    <carousel :id="`slider-${_uid}`" :per-page="1" :navigation-enabled="true">
        <slide v-for="slide in slides" :key="slide.id">
            <slide-content :slide="slide" />
        </slide>
    </carousel>
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
        return {};
    }
};
</script>

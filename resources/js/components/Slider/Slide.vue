<template>
    <div class="slide w-full relative z-0" :style="styles">
        <description />
    </div>
</template>

<script>
import Description from "./Description";
export default {
    components: {
        Description
    },
    props: {
        slide: {
            type: Object,
            default: () => ({})
        }
    },
    data() {
        return {
            styles: {
                backgroundImage:
                    "url(https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/sanddust2.jpg)"
            }
        };
    }
};
</script>
<style lang="scss" scoped>
.slide {
    color: red;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 40rem;
    &::before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.9) 0%,
            rgba(20, 20, 20, 0.9) 15%,
            rgba(83, 100, 141, 0) 100%
        );
        z-index: 1;
    }
}
</style>

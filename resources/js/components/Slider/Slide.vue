<template>
    <div class="slide w-full h-screen relative z-0">
        <img
            src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/sanddust2.jpg"
            alt=""
            class="w-full h-full object-cover"
        />
    </div>
</template>

<script>
export default {
    props: {
        slide: {
            type: Object,
            default: () => ({})
        }
    }
};
</script>
<style lang="scss" scoped>
.slide {
    color: red;
    &::after {
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

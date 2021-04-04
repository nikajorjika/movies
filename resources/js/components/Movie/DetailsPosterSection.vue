<template>
    <div
        class="cover mt-20 py-20 max-w-screen-2xl mx-auto h-full px-10 bg-center bg-cover bg-no-repeat relative"
        :style="styles"
    >
        <description />
    </div>
</template>

<script>
import Description from "components/Slider/Description";
export default {
    components: {
        Description
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
.cover {
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

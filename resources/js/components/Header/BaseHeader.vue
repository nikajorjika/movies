<template>
    <header class="md:h-20 px-6 fixed w-full top-0 right-0 left-0 z-20">
        <div class="flex flex-wrap order-1 md:order-1 md:flex-nowrap py-2 max-w-screen-xl mx-auto h-full">
            <logo class="w-2/12 md:w-40 h-full" />
            <responsive-navigation class="h-full w-full mt-4 md:mt-0 order-3 md:order-2 md:w-auto mx-auto" />
            <search-component class="h-full pl-5 w-10/12 md:w-40 order-2 md:order-3" />
        </div>
    </header>
</template>

<script>
import Logo from "./Logo";
import ResponsiveNavigation from "./ResponsiveNavigation";
import SearchComponent from "./SearchComponent";
export default {
    components: {
        Logo,
        SearchComponent,
        ResponsiveNavigation
    }
};
</script>

<style lang="scss" scoped>
header {
    backdrop-filter: blur(10px);
}
</style>

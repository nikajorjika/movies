<template>
    <header class="h-20 fixed w-full top-0 right-0 left-0 z-10">
        <div class="flex py-2 max-w-screen-2xl mx-auto h-full">
            <logo class="h-full w-40"/>
            <responsive-navigation class="h-full mx-auto" />
            <search-component class="h-full w-40" />
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

<style lang="scss" scoped></style>

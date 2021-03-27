<template>
    <ul class="flex">
        <li v-for="item in navigation" :key="item.id" class="mr-5 flex justify-center items-center">
            <a :href="item.url" class="text-gray-200 hover:text-red-600 cursor-pointer">
                {{ item.label }}
            </a>
        </li>
    </ul>
</template>

<script>
export default {
    data() {
        return {
            navigation: [
                {
                    id: 1,
                    label: "HOME",
                    url: "/"
                },
                {
                    id: 2,
                    label: "HOT",
                    url: "/"
                },
                {
                    id: 3,
                    label: "UPCOMING",
                    url: "/"
                },
                {
                    id: 4,
                    label: "POPULAR",
                    url: "/"
                },
                {
                    id: 5,
                    label: "MOVIES",
                    url: "/"
                }
            ]
        };
    }
};
</script>

<template>
    <footer class="flex px-6 mt-auto">
        <div class="mx-auto w-full max-w-screen-xl py-16">
            <div class="flex flex-wrap lg:flex-nowrap">
                <div class="w-full lg:w-1/2 pr-3 mb-6 lg:mb-0">
                    <ul class="text-white flex mb-7">
                        <li
                            v-for="{ name, href, id } in menu"
                            :key="id"
                            class="mr-5"
                        >
                            <a :href="href">{{ name }}</a>
                        </li>
                    </ul>
                    <p class="text-gray-400 text-sm">
                        © 2021 STREAMIT. All Rights Reserved. All videos and
                        shows on this platform are trademarks of, and all
                        related images and content are the property of, Streamit
                        Inc. Duplication and copy of this is strictly
                        prohibited. All rights reserved.
                    </p>
                </div>
                <div class="ml-auto pr-3 w-1/2 lg:w-max">
                    <h6 class="mb-7 text-white">
                        Follow Us:
                    </h6>
                    <ul class="flex">
                        <li v-for="social in socials" :key="social.id">
                            <a
                                target="_blank"
                                href="#"
                                class="block w-10 h-10 bg-gray-800 rounded-full mr-4 p-3 text-white hover:text-red-500 transition-all"
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
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                                    />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-1/2 lg:w-max">
                    <h6 class="text-white mb-7">Streamit App</h6>
                    <div class="flex">
                        <a class="mr-5" href="#"
                            ><img
                                src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/022.png"
                                alt="play-store"/></a
                        ><br />
                        <a class="mr-5" href="#"
                            ><img
                                src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/011.png"
                                alt="app-store"
                        /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    data() {
        return {
            menu: [
                {
                    id: 1,
                    name: "Terms Of Use",
                    href: "#"
                },
                {
                    id: 2,
                    name: "Privacy-Policy",
                    href: "#"
                },
                {
                    id: 3,
                    name: "Blog",
                    href: "#"
                },
                {
                    id: 4,
                    name: "FAQ",
                    href: "#"
                },
                {
                    id: 5,
                    name: "Watch List",
                    href: "#"
                }
            ],
            socials: [
                {
                    id: 1,
                    icon: "",
                    alt: "Facebook"
                },
                {
                    id: 2,
                    icon: "",
                    alt: "Twitter"
                },
                {
                    id: 3,
                    icon: "",
                    alt: "G-Plus"
                },
                {
                    id: 4,
                    icon: "",
                    alt: "Github"
                }
            ]
        };
    }
};
</script>

<style lang="scss" scoped></style>

<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <Popover class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <Link href="/">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10"
                             src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt=""/>
                    </Link>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <PopoverButton
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <MenuIcon class="h-6 w-6" aria-hidden="true"/>
                    </PopoverButton>
                </div>
                <PopoverGroup as="nav" class="hidden md:flex space-x-10">
                    <Popover class="relative" v-slot="{ open }">
                        <PopoverButton
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <MenuIcon class="h-6 w-6" aria-hidden="true"/>
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                                    enter-from-class="opacity-0 translate-y-1"
                                    enter-to-class="opacity-100 translate-y-0"
                                    leave-active-class="transition ease-in duration-150"
                                    leave-from-class="opacity-100 translate-y-0"
                                    leave-to-class="opacity-0 translate-y-1">
                            <PopoverPanel
                                class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <Link v-for="item in menu" :key="item.name" :href="item.href"
                                           class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <component :is="item.icon" class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                       aria-hidden="true"/>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    {{ item.name }}
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    {{ item.description }}
                                                </p>
                                            </div>
                                        </Link>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>

                    <Link href="/"
                          class="text-base md:flex items-center justify-end font-medium text-gray-500 hover:text-gray-900">
                        Home
                    </Link>
                    <Link href="/about"
                          class="text-base md:flex items-center justify-end font-medium text-gray-500 hover:text-gray-900">
                        About Us
                    </Link>
                    <Link href="/contact"
                          class="text-base md:flex items-center justify-end font-medium text-gray-500 hover:text-gray-900">
                        Contact Us
                    </Link>


                </PopoverGroup>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

                    <Link href="/favorites" class="whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent text-base font-medium text-gray-500 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </Link>
                    <Link href="/cart" class="whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent text-base font-medium text-gray-500 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </Link>
                    <Link href="/notifications" class="whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent text-base font-medium text-gray-500 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </Link>
                    <Link href="/profile" class="whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent text-base font-medium text-gray-500 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </Link>

                </div>
            </div>
        </div>

        <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
                    enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                    leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                     src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                     alt="Workflow"/>
                            </div>
                            <div class="-mr-2">
                                <PopoverButton
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <XIcon class="h-6 w-6" aria-hidden="true"/>
                                </PopoverButton>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <a v-for="item in menu" :key="item.name" :href="item.href"
                                   class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <component :is="item.icon" class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                               aria-hidden="true"/>
                                    <span class="ml-3 text-base font-medium text-gray-900">
                    {{ item.name }}
                  </span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>
</template>


<script>
    import {Link} from '@inertiajs/inertia-vue3';

    import {Popover, PopoverButton, PopoverGroup, PopoverPanel} from '@headlessui/vue'
    import {
        XIcon,
        ClipboardIcon,
        CurrencyDollarIcon,
        UsersIcon,
        MenuIcon,

    } from '@heroicons/vue/outline'
    import {ChevronDownIcon} from '@heroicons/vue/solid'

    const menu = [
        {
            name: 'My Orders',
            description: 'You can see all your Orders that you did in the past',
            href: 'myorders',
            icon: ClipboardIcon,
        },
        {
            name: 'Refund',
            description: 'If you wish, you can get a refund of any order.',
            href: '#',
            icon: CurrencyDollarIcon,
        },
        {
            name: 'Show Members',
            description: "Take a look of all of members.",
            href: '#',
            icon: UsersIcon
        },
    ];



    export default {
        components: {
            Link,
            Popover,
            PopoverButton,
            PopoverGroup,
            PopoverPanel,
            ChevronDownIcon,
            MenuIcon,
            XIcon,
        },
        name: 'Nav',
        setup() {
            return {
                menu,
            }
        },
    }
</script>

<style scoped>

</style>


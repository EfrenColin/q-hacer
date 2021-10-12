<template>
    <div>
        <nav class="-mb-px flex space-x-2">
            <Link :href="route('settings.users.personal')" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition ease-in-out duration-150"
               :class="[route().current('settings.users.personal') ? 'border-green-500 border-b-2 border-green-500 text-green-600 focus:text-green-800 focus:border-green-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300  focus:text-gray-700 focus:border-gray-300']">
                Perfil
            </Link>
            <Link :href="route('settings.users.profile')" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition ease-in-out duration-150"
               :class="[route().current('settings.users.profile') ? 'border-green-500 border-b-2 border-green-500 text-green-600 focus:text-green-800 focus:border-green-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300  focus:text-gray-700 focus:border-gray-300']">
                Cuenta
            </Link>
            <a as="button" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition ease-in-out duration-150"
               :class="[route().current('users.profile') ? 'border-green-500 border-b-2 border-green-500 text-green-600 focus:text-green-800 focus:border-green-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300  focus:text-gray-700 focus:border-gray-300']">
                Notificaciones
            </a>
            <a as="button" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition ease-in-out duration-150"
               :class="[route().current('users.profile') ? 'border-green-500 border-b-2 border-green-500 text-green-600 focus:text-green-800 focus:border-green-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300  focus:text-gray-700 focus:border-gray-300']">
                Seguridad
            </a>
        </nav>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "MenuSetting",
    components:{
        Link
    }
}
</script>

<style scoped>

</style>

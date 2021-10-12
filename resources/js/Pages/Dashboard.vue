<template>
    <Head title="Dashboard" />

    <ApplicationAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class="p-6 bg-white">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </ApplicationAuthenticatedLayout>
</template>

<script>
import ApplicationAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        ApplicationAuthenticatedLayout,
        Head,
    },
}
</script>

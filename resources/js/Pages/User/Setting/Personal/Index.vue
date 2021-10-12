<template>
    <Head title="Configuraciones personales" />

    <ApplicationAuthenticatedLayout>

        <div class="container mx-auto max-w-2xl px-6 py-8">
            <h3 class="text-3xl font-bold mb-4">Configuraciones</h3>
            <div class="overflow-hidden">
                <div class="border-b border-gray-200">
                    <div class="pb-4 sm:p-0">
                        <div class="block">
                            <ApplicationMenuSetting></ApplicationMenuSetting>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-4">
                            <div class="md:col-span-3">
                                <form action="#" method="POST">
                                    <div class="sm:overflow-hidden">
                                        <div class="space-y-6 p-1">
                                            <div class="grid grid-cols-4 gap-4">
                                                <div class="col-span-4 sm:col-span-4">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Perfil</h3>
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Eaque est explicabo nisi perspiciatis provident suscipit ullam.
                                                    </p>
                                                </div>
                                                <div class="col-span-4 sm:col-span-2">
                                                    <ApplicationLabel for="name" value="Nombre" />
                                                    <ApplicationInput id="name" type="text" class="mt-1 block w-full" v-model="form.name"/>
                                                    <ApplicationInputError :message="form.errors.name" class="ml-2" />

                                                </div>
                                                <div class="col-span-4 sm:col-span-2">
                                                </div>
                                                <div class="col-span-4 sm:col-span-2">
                                                    <ApplicationLabel for="name" value="Genero" />
                                                    <select v-model="form.gender" class="focus:border-green-300 focus:ring focus:ring-green-300 focus:ring-opacity-50 border border-gray-300 placeholder-gray-500  rounded-xl focus:outline-none px-3 py-2 mt-1 text-sm block w-full transition duration-500 ease-in-out">
                                                        <option value="Mujer">Mujer</option>
                                                        <option value="Hombre">Hombre</option>
                                                        <option value="Otro">Otro</option>
                                                        <option value="Sin definir">Sin definir</option>
                                                    </select>
                                                    <ApplicationInputError :message="form.errors.name" class="ml-2" />

                                                </div>
                                                <div class="col-span-4 sm:col-span-2">
                                                    <ApplicationLabel for="name" value="País" />
                                                    <select v-model="form.country" class="focus:border-green-300 focus:ring focus:ring-green-300 focus:ring-opacity-50 border border-gray-300 placeholder-gray-500  rounded-xl focus:outline-none px-3 py-2 mt-1 text-sm block w-full transition duration-500 ease-in-out">
                                                        <option :value="null">Seleccionar</option>
                                                        <option :value="country.code" v-text="country.name" v-for="country in countries" :key="country.code"></option>
                                                    </select>
                                                    <ApplicationInputError :message="form.errors.country" class="ml-2" />
                                                </div>
                                                <div class="col-span-4 sm:col-span-4">
                                                    <ApplicationLabel value="Bio" />
                                                    <textarea id="bio" name="about" rows="3" class="shadow-sm focus:ring-green-500 focus:border-green-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 px-4 py-3 border-t border-gray-300 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                Actualizar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </ApplicationAuthenticatedLayout>
</template>

<script>
import ApplicationAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import {Head} from "@inertiajs/inertia-vue3";
import ApplicationInput from "@/Components/Input";
import ApplicationInputError from "@/Components/InputError";
import ApplicationLabel from "@/Components/Label";
import ApplicationMenuSetting from "@/Components/MenuSetting";
export default {
    name: "Index",
    props:['user','countries'],
    components: {
        ApplicationAuthenticatedLayout,
        ApplicationInput,
        ApplicationInputError ,
        ApplicationLabel,
        ApplicationMenuSetting,
        Head,
    },

    data() {
        return {
            form: this.$inertia.form({
                bio: this.user.bio,
                name: this.user.name,
                email: this.user.email,
                gender: this.user.gender,
                country: this.user.country,
            })
        }
    },
}
</script>

<style scoped>

</style>

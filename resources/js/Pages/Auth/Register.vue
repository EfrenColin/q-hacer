<template>
    <Head title="Crear cuenta" />

    <div class="relative flex flex-col justify-between p-8 lg:p-6 xl:p-8 rounded-2xl">

        <div class="absolute inset-0 w-full h-full transform translate-x-2 translate-y-2 bg-gray-100 rounded-2xl"></div>
        <div class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-2xl"></div>
        <div class="relative">

            <form @submit.prevent="submit" class="space-y-3">
                <div>
                    <BreezeLabel for="name" value="Nombre" />
                    <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                    <ApplicationInputError :message="form.errors.name" class="ml-2" />
                </div>
                <div>
                    <BreezeLabel for="email" value="Correo electrónico" />
                    <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                    <ApplicationInputError :message="form.errors.email" class="ml-2" />
                </div>
                <div>
                    <BreezeLabel for="password" value="Contraseña" />
                    <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                </div>
                <div>
                    <BreezeLabel for="password_confirmation" value="Confirmar contraseña" />
                    <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>
                <button @click="submit"  :class="{ 'opacity-25': form.processing }" :disabled="form.processing"  class="relative flex items-center justify-center w-full px-2 py-2 text-lg font-medium text-white rounded-xl group">
                    <span class="w-full h-full absolute inset-0 transform translate-y-1.5 translate-x-1.5 group-hover:translate-y-0 group-hover:translate-x-0 transition-all ease-out duration-200 rounded-xl bg-green-500"></span>
                    <span class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-xl"></span>
                    <span class="relative"> Crear cuenta</span>
                    <svg class="w-5 h-5 ml-2 transition-all duration-200 ease-out transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </form>
            <div class="flex justify-center">
                <p class="text-center text-md font-light mt-10">¿Ya te registraste?
                    <Link :href="route('login')" class="font-light text-md text-indigo-600">Acceder</Link>
                </p>
            </div>
        </div>




    </div>


</template>

<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeInput from '@/Components/Input.vue'
import ApplicationInputError  from '@/Components/InputError.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    layout: BreezeGuestLayout,

    components: {
        BreezeButton,
        BreezeInput,
        ApplicationInputError ,
        BreezeLabel,
        BreezeValidationErrors,
        Head,
        Link,
    },

    data() {
        return {
            form: this.$inertia.form({
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                terms: false,
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('register'), {
                onFinish: () => this.form.reset('password', 'password_confirmation'),
            })
        }
    }
}
</script>

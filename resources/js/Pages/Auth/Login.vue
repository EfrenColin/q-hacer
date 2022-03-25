<template>
    <Head title="Acceder" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <div class="relative flex flex-col justify-between p-8 lg:p-6 xl:p-8 rounded-2xl">
        <div class="absolute inset-0 w-full h-full transform translate-x-2 translate-y-2 bg-gray-100 rounded-2xl"></div>
        <div class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-2xl"></div>
        <div class="relative">
            <form @submit.prevent="submit" class="space-y-3">
                <div>
                    <ApplicationLabel for="email" value="Correo electrónico" />
                    <ApplicationInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
                    <ApplicationInputError :message="form.errors.email" class="ml-2" />
                </div>
                <div >
                    <ApplicationLabel for="password" value="Contraseña" />
                    <ApplicationInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                    <ApplicationInputError :message="form.errors.password" class="ml-2" />
                </div>
                <div class="block">
                    <label class="flex items-center">
                        <ApplicationCheckbox name="remember" v-model:checked="form.remember" />
                        <span class="ml-2 text-sm text-gray-600">Recuérdame</span>
                    </label>
                </div>

                <div class="flex items-center justify-end">
                    <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        ¿Olvidaste tu contraseña?
                    </Link>
                </div>
                <button @click="submit"  :class="{ 'opacity-25': form.processing }" :disabled="form.processing"  class="relative flex items-center justify-center w-full px-2 py-2 text-lg font-medium text-white rounded-xl group">
                    <span class="w-full h-full absolute inset-0 transform translate-y-1.5 translate-x-1.5 group-hover:translate-y-0 group-hover:translate-x-0 transition-all ease-out duration-200 rounded-xl bg-green-400"></span>
                    <span class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-xl"></span>
                    <span class="relative"> Acceder</span>
                    <svg class="w-5 h-5 ml-2 transition-all duration-200 ease-out transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </form>
            <div class="flex justify-center">
                <p class="text-center text-sm text-gray-600 font-light mt-10">¿No tienes cuenta?
                    <Link :href="route('register')" class="font-semibold text-sm text-green-500">Crear cuenta</Link>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import ApplicationButton from '@/Components/Button.vue'
import ApplicationCheckbox from '@/Components/Checkbox.vue'
import ApplicationGuestLayout from '@/Layouts/Guest.vue'
import ApplicationInput from '@/Components/Input.vue'
import ApplicationInputError from '@/Components/InputError.vue'
import ApplicationLabel from '@/Components/Label.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    layout: ApplicationGuestLayout,

    components: {
        ApplicationButton,
        ApplicationCheckbox,
        ApplicationInput,
        ApplicationInputError,
        ApplicationLabel,
        Head,
        Link,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onError: () => this.form.reset('password'),
            })
        }
    }
}
</script>

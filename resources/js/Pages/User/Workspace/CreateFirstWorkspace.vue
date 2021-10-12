<template>
    <div class="min-h-screen bg-green-400 flex justify-center items-center">

        <form @submit.prevent="submit" class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20 max-w-md">
            <div>
                <h1 class="text-3xl font-bold text-center mb-4">Crea tu espacio de trabajo</h1>
                <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">
                    Los espacios de trabajo te permiten tener todo, de una forma mas organizada.</p>
            </div>
            <div>
                <input type="text" v-model="form.name" placeholder="Nombre" class="block text-sm py-2 px-2 rounded-lg w-full border outline-none" />
                <ApplicationInputError :message="form.errors.name" class="ml-2" />
            </div>
            <div class="text-center mt-6">
                <button type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"   class="py-2 w-64 text-xl text-white bg-green-400 rounded-2xl">Crear</button>
            </div>
        </form>
        <div class="w-40 h-40 absolute bg-green-300 rounded-full top-0 right-12 hidden md:block"></div>
        <div
            class="w-20 h-40 absolute bg-green-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
    </div>
</template>

<script>
import ApplicationInput from '@/Components/Input.vue'
import ApplicationInputError  from '@/Components/InputError.vue'
export default {
    name: "CreateFirstWorkspace",
    components:{
        ApplicationInput,
        ApplicationInputError
    },
    props:['name'],
    data() {
        return {
            form: this.$inertia.form({
                name: this.name ? this.name : '',
                first: !!this.name,
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('workspaces.store'))
        }
    }

}
</script>

<style scoped>

</style>

<template>
    <input
        :class="[readonly ?  'bg-gray-50 focus:border-gray-300 focus:ring focus:ring-transparent  focus:ring-0 text-gray-500' : 'focus:border-green-300 focus:ring focus:ring-green-300 focus:ring-opacity-50']"
        class="border border-gray-300 placeholder-gray-500  rounded-xl focus:outline-none px-3 py-2 mt-1 text-sm block w-full transition duration-500 ease-in-out"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input" :disabled="disabled" :readonly="readonly">
</template>

<script>
export default {
    props: ['modelValue','readonly','disabled'],

    emits: ['update:modelValue'],

    methods: {
        focus() {
            this.$refs.input.focus()
        }
    }
}
</script>

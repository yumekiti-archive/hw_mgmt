<template>
    <div>
        <p>Dashboard</p>
        {{this.user}}
    </div>
</template>
<script>
export default {
    name: 'Dashboard',
    computed: {
        user(){
            return this.$store.state.user.data
        },
    },
    created() {
        this.$store.dispatch('user/get')
    },
}
</script>
<template>
    <div>
        <p>Dashboard</p>
        <p>{{this.user}}</p>
        <p>{{this.task}}</p>
    </div>
</template>
<script>
export default {
    name: 'Dashboard',
    computed: {
        user(){
            return this.$store.state.user.data
        },
        task(){
            return this.$store.state.task.data
        },
    },
    created() {
        this.$store.dispatch('user/get')
        this.$store.dispatch('task/today')
    },
}
</script>
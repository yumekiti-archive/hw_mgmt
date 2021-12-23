<template>
    <v-container>
        <p>Dashboard</p>
        <p>{{this.task}}</p>
        <p>{{this.rate}}</p>
    </v-container>
</template>
<script>
export default {
    name: 'Dashboard',
    computed: {
        task(){
            return this.$store.state.task.data
        },
        rate(){
            return this.$store.state.rate.data
        },
    },
    created() {
        this.$store.dispatch('task/today')
        this.$store.dispatch('rate/get')
    },
}
</script>
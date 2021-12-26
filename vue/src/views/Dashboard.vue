<template>
    <div>
        <Navigation
            :user="this.user"
        ></Navigation>
        <v-container>
            <p>Dashboard</p>
            <p>{{this.task}}</p>
            <p>{{this.rate}}</p>
        </v-container>
    </div>
</template>
<script>
import Navigation from '@/components/Navigation'

export default {
    name: 'Dashboard',
    components: {
        Navigation
    },
    computed: {
        task(){
            return this.$store.state.task.data
        },
        rate(){
            return this.$store.state.rate.data
        },
        user(){
            return this.$store.state.user.data
        },
    },
    created() {
        this.$store.dispatch('task/today')
        this.$store.dispatch('rate/get')
        this.$store.dispatch('user/get')
    },
}
</script>
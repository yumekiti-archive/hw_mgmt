<template>
    <div>
        <Navigation
            :user="this.user"
        ></Navigation>
        <v-container>
            <p>Dashboard</p>
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <Rate
                        :rate="this.rate"
                    ></Rate>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <p>{{this.task}}</p>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Navigation from '@/components/Navigation'
import Rate from '@/components/Rate'

export default {
    name: 'Dashboard',
    components: {
        Navigation,
        Rate,
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
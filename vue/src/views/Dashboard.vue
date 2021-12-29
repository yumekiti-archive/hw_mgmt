<template>
    <div>
        <v-container>
            <p>Dashboard</p>
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <Rate                    
                        v-if="this.rateData"
                        :rate="this.rate"
                    ></Rate>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <Task
                        :tasks="this.task"
                    ></Task>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Rate from '@/components/Rate/Index'
import Task from '@/components/Task/Index'

export default {
    name: 'Dashboard',
    data: () => {
        return {
            rateData: false,
        }
    },
    components: {
        Rate,
        Task,
    },
    computed: {
        task(){
            return this.$store.state.today.data
        },
        rate(){
            return this.$store.state.rate.data
        },
    },
    created() {
        new Promise((resolve) => {
            resolve(this.$store.dispatch('rate/get'))
        }).then(() => {
            this.rateData = true
        })
        this.$store.dispatch('today/get')
    },
}
</script>
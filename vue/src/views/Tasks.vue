<template>
    <div>
        <v-container>
            <p>Tasks</p>
            <v-row>
                <v-col
                    cols="12"
                    md="6"
                >
                    <Calendar></Calendar>
                </v-col>
                <v-col
                    cols="12"
                    md="6"
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
import Task from '@/components/Task/Index'
import Calendar from '@/components/Calendar'

export default {
    name: 'Tasks',
    components: {
        Task,
        Calendar,
    },
    computed: {
        task(){
            return this.$store.state.task.data
        },
    },
    created() {
        this.$store.dispatch('task/today')
    },
}
</script>
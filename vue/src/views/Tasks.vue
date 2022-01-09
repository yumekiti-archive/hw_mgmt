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
            <v-row>
                <v-col
                    cols="12"
                >
                    <Lessons></Lessons>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Task from '@/components/Task/Index'
import Calendar from '@/components/Calendar'
import Lessons from '@/components/Lessons'

export default {
    name: 'Tasks',
    components: {
        Task,
        Calendar,
        Lessons,
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
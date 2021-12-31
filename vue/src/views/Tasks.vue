<template>
    <div>
        <v-container>
            <p>Tasks</p>
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                >
                    date
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
import Task from '@/components/Task/Index'

export default {
    name: 'Tasks',
    components: {
        Task,
    },
    computed: {
        task(){
            return this.$store.state.task.data
        },
    },
    created() {
        this.$store.dispatch('task/get')
    },
}
</script>
<template>
    <v-card class="card">
        <v-container>
            <v-row>
                <v-col cols="12" class="d-flex">
                    <span>Task</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" class="d-flex justify-center align-center" v-for="(task, index) in this.tasks" :key="index">
                    <Card
                        :task="task"
                    ></Card>
                </v-col>
            </v-row>
            <v-row v-if="!this.tasks[0]">
                <v-col class="d-flex justify-center align-center" cols="12">
                    <img src="/storage/images/confetti-outline.gif" style="height: 300px;">
                    Completed
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
import Card from '@/components/Task/Card'

export default {
    name: 'Task',
    components: {
        Card,
    },
    props: {
        tasks: []
    },
}
</script>
<style scoped>
.card {
    height: 100%;
    width: 100%;
}
</style>
<template>
    <v-card>
        <v-container>
            <v-row>
                <v-col cols="12">
                    <span>history</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" class="d-flex justify-center align-center" v-for="(task, index) in this.tasks" :key="index">
                    <Card
                        :task="task"
                    ></Card>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
import Card from '@/components/Task/Card'

export default {
    name: 'History',
    components: {
        Card,
    },
    props: {
        tasks: [],
    },
}
</script>
<template>
    <v-card class="card">
        <v-container>
            <v-row>
                <v-col cols="12" class="d-flex">
                    <span>task</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" class="d-flex justify-center align-center">
                    <p>{{this.task}}</p>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
export default {
    name: 'Task',
    props: {
        task: []
    },
}
</script>
<style scoped>
.card {
    height: 100%;
    width: 100%;
}
</style>
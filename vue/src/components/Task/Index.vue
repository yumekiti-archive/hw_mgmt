<template>
    <v-card class="card">
        <v-container>
            <v-row>
                <v-col cols="12" class="d-flex">
                    <span>task</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" class="d-flex justify-center align-center" v-for="(task, index) in this.tasks" :key="index">
                    <v-card class="card d-flex">
                        <div class="color"></div>
                        <v-container class="ml-5 text-h6 text-xl-h4 text-md-h5 d-flex justify-left align-center">
                            {{task.lesson.title}}
                            <v-spacer></v-spacer>
                            <v-icon class="mr-5">mdi-check-bold</v-icon>
                        </v-container>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
export default {
    name: 'Task',
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

.color {
    width: 20px;
    height: 80%;
    background-color: rgb(23, 109, 185);
}
</style>
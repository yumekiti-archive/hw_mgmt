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
                    <v-card class="card d-flex" @click="achievement(task.id)">
                        <div class="color rounded"></div>
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
    methods: {
        achievement(id = 0){
            if(id === 0) return
            this.$store.dispatch('today/achievement', {id: id})
        },
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
    height: 100%;
    background-color: rgb(23, 109, 185);
}
</style>
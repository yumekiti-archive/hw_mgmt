<template>
    <v-card class="card d-flex" @click="dialog.flag = !dialog.flag">
        <div class="color rounded" :style="'background-color:' + task.person_lesson.color"></div>
        <v-container class="ml-5 text-h6 text-xl-h4 text-md-h5 d-flex justify-left align-center">
            {{this.task.lesson.title}} : {{this.task.created_at.substring(0, this.task.created_at.indexOf(" ")).substr(this.task.created_at.indexOf('-') + 1).replace('-', '/')}} ({{this.yobi[this.week]}})
            <v-spacer></v-spacer>
            <v-icon v-if="!this.task.achievement" color="primary" class="mr-5">mdi-check-bold</v-icon>
            <v-icon v-else class="mr-5">mdi-check-bold</v-icon>
        </v-container>
        <Dialog
            :dialog="dialog"
            :id="task.id"
            :name="task.detail"
        ></Dialog>
    </v-card>
</template>
<script>
import Dialog from './Dialog.vue'

export default {
    Name: 'TaskCard',
    components: {
        Dialog,
    },
    data: () => {
        return {
            yobi: new Array("日","月","火","水","木","金","土"),
            week: null,
            dialog: {flag: false},
        }
    },
    props: {
        task: []
    },
    created() {
        this.week = new Date(this.task.created_at).getDay()
    },
}
</script>
<style scoped>
.color {
    width: 20px;
    height: 100%;
}

.card {
    width: 100%;
    height: 100%;
}
</style>
<template>
    <v-card class="card d-flex" :to="'lesson/' + lesson.lesson_color.lesson_id">
        <div class="color rounded" :style="'background-color:' + lesson.lesson_color.color"></div>
        <v-container class="ml-5 text-h6 text-xl-h4 text-md-h5 d-flex justify-left align-center">
            {{this.lesson.lesson.title}}
            <!-- <v-spacer></v-spacer>
            <v-icon class="mr-5">mdi-check-bold</v-icon> -->
        </v-container>
    </v-card>
</template>
<script>
export default {
    Name: 'TaskCard',
    props: {
        lesson: []
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
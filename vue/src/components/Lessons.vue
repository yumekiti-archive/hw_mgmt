<template>
    <v-card>
        <v-container>
            <v-row>
                <v-col cols="12">
                    <span>Lesson</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" v-for="(lesson, index) in this.lessons" :key="index">
                    {{lesson}}
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
export default {
    name: 'Lessons',
    props: {
        lessons: []
    },
}
</script>
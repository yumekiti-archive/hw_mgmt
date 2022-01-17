<template>
    <div>
        <v-container>
            <p>Lesson</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <Lesson
                        :lesson="this.lesson"
                    ></Lesson>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Lesson from '@/components/Lesson/Index'

export default {
    name: 'LessonView',
    components: {
        Lesson,
    },
    computed: {
        lesson(){
            return this.$store.state.lesson.data
        }
    },
    created() {
        this.$store.dispatch('lesson/show', {id: this.$route.params.id})
    },
}
</script>
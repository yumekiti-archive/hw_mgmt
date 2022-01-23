<template>
    <v-container>
            <p>Lessons</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <Lessons
                        :lessons="this.lessons"
                    ></Lessons>
                </v-col>
            </v-row>
        </v-container>
</template>
<script>
import Lessons from '@/components/Lessons/Index'

export default {
    name: 'AnotherUserView',
    components: {
        Lessons,
    },
    computed: {
        lessons(){
            return this.$store.state.users.data.filter((element, index, self) => self.findIndex(e => e.person_lesson.lesson_id === element.person_lesson.lesson_id) === index)
        },
    },
    created() {
        this.$store.state.lesson.data = []
        this.$store.dispatch('users/lessons', {id: this.$route.params.user_id})
    },
}
</script>
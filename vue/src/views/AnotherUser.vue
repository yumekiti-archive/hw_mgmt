<template>
    <v-container>
            <p>Lessons</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <Profile
                        :user="this.user"
                    ></Profile>
                </v-col>
                <v-col
                    cols="12"
                >
                    <Lessons
                        v-if="flag"
                        :lessons="this.lessons"
                    ></Lessons>
                </v-col>
            </v-row>
        </v-container>
</template>
<script>
import Profile from '@/components/Profile'
import Lessons from '@/components/Lessons/Index'

export default {
    name: 'AnotherUserView',
    data: () => {
        return {
            flag: false,
        }
    },
    components: {
        Lessons,
        Profile,
    },
    computed: {
        lessons(){
            return this.$store.state.lesson.data.filter((element, index, self) => self.findIndex(e => e.person_lesson.lesson_id === element.person_lesson.lesson_id) === index)
        },
        user(){
            return this.$store.state.users.data
        },
    },
    created() {
        this.$store.dispatch('users/show', {id: this.$route.params.user_id})
        this.$store.state.lesson.data = []
        new Promise((resolve) => {
            resolve(this.$store.dispatch('lesson/user', {id: this.$route.params.user_id}))
        }).then(() => {
            this.flag = true
        })
    },
}
</script>
<template>
    <div>
        <p>Lesson</p>
        <Lesson
            :lesson="this.lesson"
        ></Lesson>
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
<template>
    <div>
        <p>Lesson</p>
        {{this.lesson}}
    </div>
</template>
<script>
export default {
    name: 'Lesson',
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
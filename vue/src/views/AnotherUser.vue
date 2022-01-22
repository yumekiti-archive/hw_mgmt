<template>
    <div>
        <p>asdasd</p>
    </div>
</template>
<script>
export default {
    name: 'AnotherUserView',
    computed: {
        lessons(){
            return this.$store.state.users.data
        },
    },
    created() {
        this.$store.dispatch('users/lessons', {id: this.$route.params.user_id})
    },
}
</script>
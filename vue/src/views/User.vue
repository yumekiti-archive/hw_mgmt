<template>
    <div>
        <v-container>
            <p>Users</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    {{this.user}}
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'User',
    computed: {
        user(){
            return this.$store.state.user.data
        },
    },
    created() {
        this.$store.dispatch('user/get')
    },
}
</script>
<template>
    <div>
        <v-container>
            <p>Users</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    {{this.users}}
                    <img src="https://www.civillink.net/sozai/hp.gif" height="300"><br>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'Users',
    computed: {
        users(){
            return this.$store.state.users.data
        },
    },
    created() {
        this.$store.dispatch('users/get')
    },
}
</script>
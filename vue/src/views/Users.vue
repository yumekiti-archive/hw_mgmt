<template>
    <div>
        <v-container>
            <p>Users</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    {{this.users}}
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'Tasks',
    data: () => {
        return {
            rateData: false,
        }
    },
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
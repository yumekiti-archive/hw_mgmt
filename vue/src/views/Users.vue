<template>
    <div>
        <v-container>
            <v-row class="mt-1">
                <span class="mt-2">Users</span>
                <v-spacer></v-spacer>
                <v-btn icon>
                    <v-icon>mdi-plus</v-icon>
                </v-btn>
            </v-row>
            <v-row>
                <v-col
                    cols="12"
                    v-for="(user, index) in this.users" :key="index"
                >
                    <Users
                        :user="user"
                    />
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Users from '@/components/Users'

export default {
    name: 'UsersView',
    components: {
        Users,
    },
    computed: {
        users(){
            return this.$store.state.users.data
        },
    },
    created() {
        this.$store.state.users.data = []
        this.$store.dispatch('users/get')
    },
}
</script>
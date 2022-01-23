<template>
    <div>
        <v-container>
            <p>Users</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <Profile
                        :user="this.user"
                    ></Profile>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Profile from '@/components/Profile'

export default {
    name: 'UserView',
    components: {
        Profile,
    },
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
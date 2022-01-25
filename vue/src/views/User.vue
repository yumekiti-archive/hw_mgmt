<template>
    <div>
        <v-container>
            <p>User</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <Profile
                        :user="this.user"
                    ></Profile>
                </v-col>
                <v-col cols="12">
                    <Settings></Settings>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import Profile from '@/components/Profile'
import Settings from '@/components/Settings'

export default {
    name: 'UserView',
    components: {
        Profile,
        Settings,
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
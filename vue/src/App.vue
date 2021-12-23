<template>
    <v-app>
        <Navigation
            :user="this.user"
        ></Navigation>
        <v-main>
            <router-view/>
        </v-main>
    </v-app>
</template>

<script>
import Navigation from '@/components/Navigation'

export default {
    name: 'App',
    components: {
        Navigation
    },
    computed: {
        user(){
            return this.$store.state.user.data
        },
    },
    created() {
        this.$store.dispatch('user/get')
    },
};
</script>

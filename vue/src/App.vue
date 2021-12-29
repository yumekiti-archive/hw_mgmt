<template>
    <v-app>
        <v-main>
            <Navigation
                :user="this.user"
            ></Navigation>
            <router-view/>
        </v-main>
    </v-app>
</template>

<script>
import Navigation from '@/components/Navigation'

export default {
    name: 'App',
    components: {
        Navigation,
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

<template>
    <v-navigation-drawer
        expand-on-hover
        permanent
        app
        :mini-variant.sync="mini"
    >
        <v-list-item class="px-2">
            <v-list-item-avatar>
                <v-img src="https://pbs.twimg.com/profile_images/1463858424371093504/KaNOSius_400x400.jpg"></v-img>
            </v-list-item-avatar>

            <v-list-item-title>{{user.name}}</v-list-item-title>
        </v-list-item>

        <v-divider></v-divider>

        <v-list>
            <v-list-item
                v-for="item in items"
                :key="item.title"
                :to="item.url"
                link
                class="py-5"
            >
                <v-list-item-icon>
                    <v-icon>{{ item.icon }}</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
        
        <template v-slot:append>
            <v-list>
                <v-list-item
                    v-for="item in bottom"
                    :key="item.title"
                    :to="item.url"
                    link
                    class="py-5"
                >
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </template>
    </v-navigation-drawer>
</template>
<script>
export default {
    name: 'Navigation',
    props: {
        user: []
    },
    data () {
        return {
            items: [
                {title: 'Dashboard', icon: 'mdi-view-dashboard', url: '/'},
                {title: 'Tasks', icon: 'mdi-checkbox-multiple-marked-outline', url: '/tasks'},
                {title: 'Users', icon: 'mdi-account-group-outline', url: '/users'},
            ],
            bottom: [
                {title: 'My Account', icon: 'mdi-account-outline', url: '/user'},
                {title: 'Settings', icon: 'mdi-cog-outline', url: '/settings'},
            ],
            mini: false,
        }
    },
}
</script>
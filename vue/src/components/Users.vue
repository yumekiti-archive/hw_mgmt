<template>
    <v-card :to="'hoge'">
        <v-list-item>
            <v-list-item-avatar>
                <v-img :src="user.users.profile_image"></v-img>
            </v-list-item-avatar>

            <v-list-item-content>
                <v-list-item-title v-html="user.users.name"></v-list-item-title>
                <v-list-item-subtitle v-html="user.users.email"></v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>
    </v-card>
</template>
<script>
export default {
    props: {
        user: []
    },
}
</script>
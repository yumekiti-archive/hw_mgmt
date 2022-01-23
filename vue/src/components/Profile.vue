<template>
    <v-card>
        <v-container>
            <v-row>
                <v-col cols="12">
                    <span>Profile</span>
                </v-col>
            </v-row>
            <v-row class="d-flex justify-center align-center">
                <v-col cols="12" md="6">
                    <v-img
                        :src="user.profile_image"
                        max-height="300"
                        contain
                    ></v-img>
                </v-col>
                <v-col cols="12" md="6">
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon v-text="'mdi-account'"></v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title v-text="user.name"></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon v-text="'mdi-email'"></v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title v-text="user.email"></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
export default {
    name: 'Profile',
    props: {
        user: []
    },
}
</script>
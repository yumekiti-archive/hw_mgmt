<template>
    <v-card>
        <v-container>
            <v-row>
                <v-col cols="12">
                    <span>history</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12">
                    {{tasks}}
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
export default {
    name: 'History',
    props: {
        tasks: [],
    }
}
</script>
<template>
    <v-card class="card d-flex" @click="achievement(id)">
        <div class="color rounded"></div>
        <v-container class="ml-5 text-h6 text-xl-h4 text-md-h5 d-flex justify-left align-center">
            {{this.title}}
            <v-spacer></v-spacer>
            <v-icon v-if="!flag" class="mr-5">mdi-check-bold</v-icon>
            <v-icon v-else color="primary" class="mr-5">mdi-check-bold</v-icon>
        </v-container>
    </v-card>
</template>
<script>
export default {
    Name: 'TaskCard',
    props: {
        id: Number,
        title: String,
        flag: Boolean,
    },
    methods: {
        achievement(id = 0){
            if(id === 0) return
            this.$store.dispatch('task/achievement', {id: id})
        },
    },
}
</script>
<style scoped>
.color {
    width: 20px;
    height: 100%;
    background-color: rgb(23, 109, 185);
}
</style>
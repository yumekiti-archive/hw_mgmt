<template>
    <div>
        <v-card>
        <v-container>
            <v-row>
                <v-col cols="12" class="d-flex">
                    <span>task</span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" class="d-flex justify-center align-center">
                    <p>{{this.task}}</p>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
    </div>
</template>
<script>
export default {
    name: 'Task',
    props: {
        task: []
    },
}
</script>
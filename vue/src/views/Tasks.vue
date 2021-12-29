<template>
    <div>
        <v-container>
            <p>Tasks</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    {{this.task}}
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'Tasks',
    data: () => {
        return {
            rateData: false,
        }
    },
    computed: {
        task(){
            return this.$store.state.task.data
        },
    },
    created() {
        this.$store.dispatch('task/get')
    },
}
</script>
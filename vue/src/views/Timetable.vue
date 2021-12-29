<template>
    <div>
        <v-container>
            <p>Timetable</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    {{this.timetable}}
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'Timetable',
    computed: {
        timetable(){
            return this.$store.state.timetable.data
        },
    },
    created() {
        this.$store.dispatch('timetable/get')
    },
}
</script>
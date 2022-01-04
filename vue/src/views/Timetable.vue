<template>
    <div>
        <v-container>
            <p>Timetable</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <v-sheet height="800">
                        <v-calendar
                            ref="calendar"
                            type="week"
                            :weekdays="weekday"
                        ></v-calendar>
                        {{this.timetable}}
                    </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'Timetable',
    data: () => {
        return {
            weekday: [1, 2, 3, 4, 5],
        }
    },
    computed: {
        timetable(){
            return this.$store.state.timetable.data
        },
    },
    created() {
        this.$store.dispatch('timetable/get')
    },
    mounted() {
        this.$refs.calendar.scrollToTime('08:00')
    },
}
</script>
<template>
    <div>
        <v-container>
            <p>Timetable</p>
            <v-row>
                <v-col
                    cols="12"
                >
                    <v-sheet v-resize="onResize" :style="style">
                        <v-calendar
                            ref="calendar"
                            type="week"
                            color="primary"
                            :events="events"
                            :weekdays="weekday"
                        ></v-calendar>
                    </v-sheet>
                </v-col>
                {{this.timetable}}
            </v-row>
        </v-container>
    </div>
</template>
<script>
const toDoubleDigits = (num) => {
    num += "";
    if (num.length === 1) {
        num = "0" + num;
    }
    return num;     
};

export default {
    name: 'Timetable',
    data: () => {
        return {
            events: [],
            weekday: [1, 2, 3, 4, 5],
            height: 0,
        }
    },
    methods: {
        onResize() {
            this.height = window.innerHeight
        },
    },
    computed: {
        timetable(){
            return this.$store.state.timetable.data
        },
        style() {
            return 'height: ' + this.height * 0.85 + 'px;'
        },
    },
    created() {
        this.$store.dispatch('timetable/get')
    },
    mounted() {
        var now = new Date(); 
        var hour = toDoubleDigits(now.getHours())
        var min = toDoubleDigits(now.getMinutes())
        this.$refs.calendar.scrollToTime(hour + ':' + min)

        this.events.push({
            name: 'hoge',
            start: '2022-01-03 01:41:46',
            end: '2022-01-03 02:41:46',
            color: 'red',
        })
    },
}
</script>
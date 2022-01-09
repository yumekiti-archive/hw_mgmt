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
                            :event-ripple="false"
                        ></v-calendar>
                    </v-sheet>
                </v-col>
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
            calendar: false,
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
        new Promise((resolve) => {
            resolve(this.$store.dispatch('timetable/get'))
        }).then(() => {
            this.timetable.forEach(data => {
                this.events.push({
                    name: data.lesson.title,
                    start: data.start,
                    end: data.end,
                    color: data.color,
                })
            });
        })
    },
    mounted() {
        var now = new Date(); 
        var hour = toDoubleDigits(now.getHours())
        var min = toDoubleDigits(now.getMinutes())
        this.$refs.calendar.scrollToTime(hour + ':' + min)
    },
}
</script>
<template>
    <!-- <v-date-picker
        v-model="date"
        :events="events"
        :event-color="colors => colors ? 'red' : 'yellow'"
        full-width
        elevation="2"
        @click:date="this.getDate"
    ></v-date-picker> -->
    <p>
        {{this.tasks}}<br><br>
        {{this.events}}<br><br>
        {{this.colors}}<br><br>
    </p>
</template>
<script>
export default {
    name: 'Calendar',
    data: () => ({
        date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
        colors: [],
    }),
    methods: {
        getDate(date){
            this.$store.dispatch('task/date', {data: {date: date}})
        },
        set(){
            this.events.forEach((event) => {
                let flag = false
                this.tasks.forEach((task) => {
                    if(task.created_at.indexOf(event) != -1 && task.achievement){
                        flag = true
                    }
                })
                this.colors.push(flag)
            })
        }
    },
    computed: {
        tasks(){
            return this.$store.state.task.events
        },
        events(){
            return Array.from(new Set(this.tasks.map(event => event.created_at.substring(0, event.created_at.indexOf(" ")))))
        },
    },
    created() {
        new Promise((resolve) => {
            resolve(this.$store.dispatch('task/events'))
        }).then(() => {
            this.set()
        })
    },
}
</script>
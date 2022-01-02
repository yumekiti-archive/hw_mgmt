<template>
    <v-date-picker
        v-model="date1"
        :events="arrayEvents"
        event-color="green lighten-1"
        full-width
        elevation="2"
        @click:date="this.date"
    ></v-date-picker>
</template>
<script>
export default {
    name: 'Calendar',
    data: () => ({
        arrayEvents: null,
        date1: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
    }),
    methods: {
        date(date){
            this.$store.dispatch('task/date', {data: {date: date}})
        },
    },
    mounted () {
        this.arrayEvents = [...Array(6)].map(() => {
            const day = Math.floor(Math.random() * 30)
            const d = new Date()
            d.setDate(day)
            return d.toISOString().substr(0, 10)
        })
    },
}
</script>\
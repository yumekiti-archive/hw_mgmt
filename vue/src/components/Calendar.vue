<template>
    <v-date-picker
        v-model="date"
        :events="events"
        event-color="red"
        full-width
        elevation="2"
        @click:date="this.getDate"
    ></v-date-picker>
</template>
<script>
export default {
    name: 'Calendar',
    props: {
        events: [],
    },
    data: () => ({
        date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
    }),
    methods: {
        getDate(date){
            this.$store.dispatch('task/date', {data: {date: date}})
        },
    },
}
</script>
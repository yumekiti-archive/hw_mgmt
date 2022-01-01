<template>
    <div>
        <v-date-picker
            class="test"
            v-model="date1"
            :events="arrayEvents"
            event-color="green lighten-1"
            full-width
            elevation="24"
        ></v-date-picker>
    </div>
</template>
<script>
export default {
    name: 'Calendar',
    data: () => ({
      arrayEvents: null,
      date1: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
    }),

    mounted () {
      this.arrayEvents = [...Array(6)].map(() => {
        const day = Math.floor(Math.random() * 30)
        const d = new Date()
        d.setDate(day)
        return d.toISOString().substr(0, 10)
      })
    },
}
</script>
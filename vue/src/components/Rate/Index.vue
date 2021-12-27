<template>
    <v-card class="card">
        <v-container>
            <v-row>
                <v-col cols="12" class="d-flex">
                    <span>Rate</span>
                    <v-spacer></v-spacer>
                    <span>
                        <CurrentDate></CurrentDate>
                    </span>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" class="d-flex justify-center align-center">
                    <Graph
                        class="d-flex justify-center align-center"
                        style="width: 90%; height: 90%;"
                        :not="this.rate.not"
                        :done="this.rate.achievement"
                        :today="this.rate.today"
                    ></Graph>
                    <p>
                        <v-icon class="text-xl-h1 text-md-h3 text-sm-h6">mdi-calendar-check</v-icon><br>
                        <span class="text-xl-h1 text-md-h3 text-sm-h6">{{this.rate.achievement}} / {{this.rate.all}}</span>
                    </p>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
import CurrentDate from '@/components/Rate/CurrentDate'
import Graph from '@/components/Rate/Graph'

export default {
    name: 'Rate',
    components: {
        CurrentDate,
        Graph,
    },
    props: {
        rate: [],
    },
}
</script>
<style scoped>
p {
    position: absolute;
    left: 0;
    right: 0;
    top: 48%;
    margin: auto;
    text-align: center;
    transform: translateY(-60%); 
}

.card {
    height: 100%;
    width: 100%;
}
</style>
<template>
    <v-card>
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
            <v-row v-resize="onResize" :style="style">
                <v-col cols="12" class="d-flex justify-center align-center">
                    <Graph
                        class="d-flex justify-center align-center"
                        style="width: 90%; height: 90%;"
                        :not="this.rate.not"
                        :done="this.rate.achievement"
                    ></Graph>
                    <p>
                        <v-icon class="text-xl-h1 text-md-h3 text-sm-h5">mdi-calendar-check</v-icon><br>
                        <span class="text-xl-h1 text-md-h3 text-sm-h5">{{this.rate.achievement}} / {{this.rate.all}}</span>
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
    data: () => {
        return {
            height: 0,
        }
    },
    computed: {
        style() {
            return 'height: ' + this.height * 0.8 + 'px;'
        },
    },
    methods: {
        onResize() {
            this.height = window.innerHeight
        },
    },
}
</script>
<style scoped>
p {
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    margin: auto;
    text-align: center;
    transform: translateY(-60%); 
}
</style>
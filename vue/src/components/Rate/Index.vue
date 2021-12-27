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
                    <CenterText
                        :rate="this.rate"
                    ></CenterText>
                </v-col>
            </v-row>
            <v-row>
                <v-col cols="12" md="4" class="my-3 d-flex justify-center align-center" v-for="(label, index) in labels" :key="index">
                    <v-icon class="mb-1 mr-3" :color="label.color">mdi-checkbox-blank-circle</v-icon>
                    <span>{{label.title}} - {{rate[label.data]}}</span>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
import CurrentDate from '@/components/Rate/CurrentDate'
import CenterText from '@/components/Rate/CenterText'
import Graph from '@/components/Rate/Graph'

export default {
    name: 'Rate',
    components: {
        CurrentDate,
        CenterText,
        Graph,
    },
    props: {
        rate: [],
    },
    data: () => {
        return {
            labels: [
                {title: 'Not Yet', color: 'grey', data: 'not'},
                {title: 'Done', color: 'blue', data: 'achievement'},
                {title: 'Today', color: 'green', data: 'today'},
            ]
        }
    }
}
</script>
<style scoped>
.card {
    height: 100%;
    width: 100%;
}
</style>
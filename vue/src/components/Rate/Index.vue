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
                        :rate="this.rate"
                    ></Graph>
                    <CenterText
                        :rate="this.rate"
                    ></CenterText>
                </v-col>
            </v-row>
            <Label
                :rate="this.rate"
            ></Label>
        </v-container>
    </v-card>
</template>
<script>
import CurrentDate from '@/components/Rate/CurrentDate'
import CenterText from '@/components/Rate/CenterText'
import Label from '@/components/Rate/Label'
import Graph from '@/components/Rate/Graph'

export default {
    name: 'Rate',
    components: {
        CurrentDate,
        CenterText,
        Label,
        Graph,
    },
    props: {
        rate: [],
    },
}
</script>
<style scoped>
.card {
    height: 100%;
    width: 100%;
}
</style>
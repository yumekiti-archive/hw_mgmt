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
                <v-col cols="12">
                    <p>{{this.rate}}</p>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
import CurrentDate from '@/components/CurrentDate'

export default {
    name: 'Rate',
    components: {
        CurrentDate,
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
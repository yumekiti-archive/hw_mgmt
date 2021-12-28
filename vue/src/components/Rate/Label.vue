<template>
    <v-row>
        <v-col cols="12" md="4" class="d-flex justify-center align-center" v-for="(label, index) in labels" :key="index">
            <v-icon class="mb-1 mr-3" :color="label.color">mdi-checkbox-blank-circle</v-icon>
            <span>{{label.title}} - {{rate[label.data]}}</span>
        </v-col>
    </v-row>
</template>
<script>
export default {
    name: 'Label',
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
    },
}
</script>
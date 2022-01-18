<template>
    <v-dialog
        v-model="dialog.flag"
        width="500"
    >
        <v-card>

            <v-card-title class="text-h5 grey lighten-2">
                Completed
            </v-card-title>

            <v-card-text style="margin-top: 30px">
                <v-text-field
                    label="TaskName"
                    placeholder="Nothing"
                    v-model="TaskName"
                ></v-text-field>
            </v-card-text>

            <v-divider></v-divider>

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                    color="grey"
                    text
                    @click="dialog.flag = false"
                >
                    Cancel
                </v-btn>
                <v-btn
                    color="primary"
                    text
                    @click="dialog.flag = false, achievement(id)"
                >
                    Done
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>
<script>
export default {
    name: 'Dialog',
    data: () => {
        return {
            TaskName: '',
        }
    },
    props: {
        dialog: Object,
        id: String,
        name: String,
    },
    methods: {
        achievement(id = 0){
            if(id === 0) return
            if(this.TaskName){
                this.$store.dispatch('task/update', {id: id, data: {detail: this.TaskName}})
            }
            this.$store.dispatch('task/achievement', {id: id})
        },
    },
    created() {
        this.TaskName = ''
        if(this.name != 'Nothing'){
            this.TaskName = this.name
        }
    },
}
</script>
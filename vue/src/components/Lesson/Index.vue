<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="lesson"
            item-key="name"
            class="elevation-1"
            :search="search"
            :items-per-page="20"
        >
            <template v-if="lesson.created_at" v-slot:[`item.created_at`]="{ item }">
                <span>{{item.created_at.substring(0, item.created_at.indexOf(" ")).replace('-', '/').replace('-', '/')}}</span>
            </template>
            <template v-slot:top>
                <v-text-field
                    v-model="search"
                    label="Search"
                    class="mx-4"
                ></v-text-field>
            </template>
        </v-data-table>
    </div>
</template>
<script>
export default {
    name: 'Lesson',
    props: {
        lesson: [],
    },
    data: () => {
        return {
            search: '',
        }
    },
    computed: {
        headers () {
            return [
                {
                    text: 'TaskName',
                    align: 'center',
                    value: 'detail',
                },
                { text: 'Date', align: 'center', value: 'created_at' },
                { text: 'Updated', align: 'left', value: 'updated_at' },
            ]
        },
    },
}
</script>
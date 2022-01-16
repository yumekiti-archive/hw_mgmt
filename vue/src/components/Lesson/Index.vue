<template>
    <div>
        <v-data-table
            :headers="headers"
            :items="lesson"
            item-key="name"
            class="elevation-1"
            :search="search"
            items-per-page="20"
        >
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
                { text: 'created_at', value: 'created_at' },
                { text: 'updated_at', value: 'updated_at' },
            ]
        },
    },
}
</script>
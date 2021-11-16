<template>
    <div class="Test">
        <input type="text" v-model="url" />
        <p>url id /api/{{url}}</p>

        <button @click="this.get">get</button>
        <button @click="this.get">delete</button>

        <div>
            <p>{{this.data}}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Test',
    data: () => {
        return {
            url: '',
            data: null
        }
    },
    methods: {
        get: async () => {
            await axios
                .get('/api/' + this.url)
                .then(res => (this.data = res))
        },
        delete: async () => {
            await axios
                .delete('/api/' + this.url)
                .then(res => (this.data = res))
        },
    },
}
</script>
<template>
    <div>
        <input type="text" v-model="url" />
        <p>url is -> localhost:8080/api/{{this.url}}</p>

        <h3>lesson</h3>
        <span>
            title
            <input type="text" v-model="title" /><br>
            limit
            <input type="text" v-model="limit" /><br>
        </span><br>

        <h3>timetable</h3>
        <span>
            week_count
            <input type="text" v-model="week_count" /><br>
            period
            <input type="text" v-model="period" /><br>
            lesson_id
            <input type="text" v-model="lesson_id" /><br>
        </span><br>

        <h3>task</h3>
        <span>
            achievement
            <input type="text" v-model="achievement" /><br>
            lesson_id
            <input type="text" v-model="lesson_id" /><br>
            detail
            <input type="text" v-model="detail" /><br>
        </span><br>

        <h3>invite</h3>
        <span>
            invite_user_id
            <input type="text" v-model="invite_user_id" /><br>
        </span><br>

        <h3>user</h3>
        <span>
            name
            <input type="text" v-model="name" /><br>
            email
            <input type="text" v-model="email" /><br>
            password
            <input type="text" v-model="password" /><br>
        </span><br>

        <button @click="this.get">get</button>
        <button @click="this.post">post</button>
        <button @click="this.put">put</button>
        <button @click="this.delete">delete</button>
        <button @click="this.login">login</button>

        <div>{{this.data}}</div>

    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Test',
    data: () => {
        return {
            url: '',
            data: null,
            name: '',
            email: '',
            password: '',
            invite_user_id: '',
            achievement: '',
            lesson_id: '',
            detail: '',
            title: '',
            limit: '',
            period: '',
            week_count: '',
        }
    },
    methods: {
        get() {
            axios
                .get('/api/' + this.url)
                .then(res => {
                    this.data = res.data
                    console.log(res.data)
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        delete () {
            axios
                .delete('/api/' + this.url)
                .then(res => {
                    this.data = res.data
                    console.log(res.data)
                })
        },
        post () {
            const formData = {
                name: this.name,
                email: this.email,
                password: this.password,
                invite_user_id: this.invite_user_id,
                achievement: this.achievement,
                lesson_id: this.lesson_id,
                detail: this.detail,
                title: this.title,
                limit: this.limit,
                period: this.period,
                week_count: this.week_count,
            }
            axios
                .post('/api/' + this.url, formData)
                .then(res => {
                    this.data = res.data
                    console.log(res.data)
                })
        },
        put () {
            const formData = {
                name: this.name,
                email: this.email,
                password: this.password,
                invite_user_id: this.invite_user_id,
                achievement: this.achievement,
                lesson_id: this.lesson_id,
                detail: this.detail,
                title: this.title,
                limit: this.limit,
                period: this.period,
                week_count: this.week_count,
            }
            axios
                .put('/api/' + this.url, formData)
                .then(res => {
                    this.data = res.data
                    console.log(res.data)
                })
        },
        login() {
            const postData = {
                email: this.email,
                password: this.password,
            }
            axios.get('/api/csrf-cookie').then(() => {
                axios
                    .post('/api/login', postData)
                    .then(res => {
                        this.data = res.data
                        console.log(res.data)
                    })
            });
        }
    },
}
</script>
import Vue from 'vue'
import VueRouter from 'vue-router'
import Test from '../views/Test.vue'
import Dashboard from '@/views/Dashboard.vue'
import Tasks from '@/views/Tasks.vue'
import Users from '@/views/Users.vue'
import User from '@/views/User.vue'
import Setting from '@/views/Setting.vue'
import Timetable from '@/views/Timetable.vue'
import Login from '@/views/Login.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Dashboard',
        component: Dashboard
    },
    {
        path: '/tasks',
        name: 'Tasks',
        component: Tasks
    },
    {
        path: '/timetable',
        name: 'Timetable',
        component: Timetable
    },
    {
        path: '/users',
        name: 'Users',
        component: Users
    },
    {
        path: '/user',
        name: 'User',
        component: User
    },
    {
        path: '/setting',
        name: 'Setting',
        component: Setting
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        // 開発後消す
        path: '/test',
        name: 'Test',
        component: Test
    },
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router

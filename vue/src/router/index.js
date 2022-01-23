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
import Lesson from '@/views/Lesson.vue'
import AnotherUser from '@/views/AnotherUser.vue'
import AnotherLesson from '@/views/AnotherLesson.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'DashboardView',
        component: Dashboard
    },
    {
        path: '/tasks',
        name: 'TasksView',
        component: Tasks
    },
    {
        path: '/timetable',
        name: 'TimetableView',
        component: Timetable
    },
    {
        path: '/users',
        name: 'UsersView',
        component: Users
    },
    {
        path: '/user',
        name: 'UserView',
        component: User
    },
    {
        path: '/setting',
        name: 'SettingView',
        component: Setting
    },
    {
        path: '/login',
        name: 'LoginView',
        component: Login
    },
    {
        path: '/lesson/:id',
        name: 'LessonView',
        component: Lesson
    },
    {
        path: '/:user_id/lessons/',
        name: 'AnotherUserView',
        component: AnotherUser
    },
    {
        path: '/:user_id/lesson/:id',
        name: 'AnotherLessonView',
        component: AnotherLesson
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

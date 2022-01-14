import Vue from 'vue'
import Vuex from 'vuex'

import user from '@/store/modules/user.js'
import users from '@/store/modules/users.js'
import task from '@/store/modules/task.js'
import rate from '@/store/modules/rate.js'
import timetable from '@/store/modules/timetable.js'
import event from '@/store/modules/event.js'
import history from '@/store/modules/history.js'
import lesson from '@/store/modules/lesson.js'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
    },
    mutations: {
    },
    actions: {
    },
    modules: {
        user,
        users,
        task,
        rate,
        timetable,
        event,
        history,
        lesson,
    }
})

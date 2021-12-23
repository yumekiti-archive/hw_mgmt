import Vue from 'vue'
import Vuex from 'vuex'

import user from '@/store/modules/user.js'
import task from '@/store/modules/task.js'
import rate from '@/store/modules/rate.js'

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
        task,
        rate,
    }
})

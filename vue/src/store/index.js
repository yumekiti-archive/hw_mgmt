import Vue from 'vue'
import Vuex from 'vuex'

import user from '@/store/modules/user.js'
import task from '@/store/modules/task.js'

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
    }
})

import api from '@/libs/api'

export default {
    namespaced:true,
    state: {
        data: [],
    },
    mutations: {
        set: (state, response) => {
            state.data = Array.from(new Set(response.data.map(timetable => timetable.lesson.title)))
        },
    },
    getters: {
    },
    actions: {
        async get({commit}){
            await api.get('lesson').then(response => {
                commit('set', response);
            })
        },
    },
}
import api from '@/libs/api'

export default {
    namespaced:true,
    state: {
        data: [],
        events: [],
    },
    mutations: {
        set: (state, response) => {
            state.data = response.data;
        },
        setEvents: (state, response) => {
            state.events = response.data;
        },
    },
    getters: {
    },
    actions: {
        async get({commit}) {
            await api.get('task').then(response => {
                commit('set', response);
            })
        },
        async today({commit}) {
            await api.get('task/today').then(response => {
                commit('set', response);
            })
        },
        async achievement({state}, {id}){
            await api.get('task/achievement/' + id).then(response => {
                state.data.splice(state.data.findIndex(task => task.id === response.data.id), 1, response.data)
                this.dispatch('rate/get')
            })
        },
        async date({commit}, {data}){
            await api.post('task/date', data).then(response => {
                commit('set', response);
            })
        },
        async events({commit}){
            await api.get('task/events').then(response => {
                commit('setEvents', response);
            })
        },
    },
}
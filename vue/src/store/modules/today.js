import api from '@/libs/api'

export default {
    namespaced:true,
    state: {
        data: [],
    },
    mutations: {
        set: (state, response) => {
            state.data = response.data;
        },
    },
    getters: {
    },
    actions: {
        async get({commit}) {
            await api.get('task/today').then(response => {
                commit('set', response);
            })
        },
        async achievement({state}, {id}){
            await api.get('task/achievement/' + id).then(response => {
                state.data.filter(task => task.id == response.data.id)[0] = response.data
            })
        }
    },
}
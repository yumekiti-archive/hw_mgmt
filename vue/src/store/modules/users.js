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
            await api.get('invite').then(response => {
                commit('set', response);
            })
        },
        async lessons({commit}, {id}) {
            await api.get(id + '/lessons').then(response => {
                commit('set', response);
            })
        },
    },
}
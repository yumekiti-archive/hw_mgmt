import api from '@/libs/api'

export default {
    namespaced:true,
    state: {
        data: [],
    },
    mutations: {
        set: (state, response) => {
            state.data = response.data
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
        async show({commit}, {id}){
            await api.get('lesson/' + id).then(response => {
                commit('set', response);
            })
        },
        async users({commit}, {user_id, id}){
            await api.get(user_id + '/lesson/' + id).then(response => {
                commit('set', response);
            })
        },
    },
}
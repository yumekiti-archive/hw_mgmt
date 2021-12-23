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
    getters:{
    },
    actions: {
        async today({commit}){
            await api.get('task/today').then(response => {
                commit('set', response);
            })
        },
    },
}
import axios from "axios"

const api = {
    get(url){
        return axios.get('/api/' + url)
    },
}

export default api;
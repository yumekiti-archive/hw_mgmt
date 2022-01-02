import client from "./client"
import router from '@/router'

const api = {
    get(url){
        return client.get(url).catch(error => {
            if(error.response?.status === 401){
                router.push('/test')
            }
        })
    },
    post(url, data){
        return client.post(url, data).catch(error => {
            if(error.response?.status === 401){
                router.push('/test')
            }
        })
    },
}

export default api;
import client from "./client"

const api = {
    get(url){
        return client.get(url).catch(error => {
            console.log(error)
        })
    },
}

export default api;
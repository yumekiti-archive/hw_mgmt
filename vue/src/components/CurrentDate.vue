<template>
    <div>
        <span>{{this.date}}</span>
    </div>
</template>
<script>
const toDoubleDigits = (num) => {
    num += "";
    if (num.length === 1) {
        num = "0" + num;
    }
    return num;     
};

export default {
    name: 'CurrentDate',
    data: () => {
        return {
            date: null
        }
    },
    methods: {
        getDate() {
            var now = new Date(); 

            var month = toDoubleDigits(now.getMonth() + 1)
            var day = toDoubleDigits(now.getDate())
            var hour = toDoubleDigits(now.getHours())
            var min = toDoubleDigits(now.getMinutes())
            var sec = toDoubleDigits(now.getSeconds())

            var week = now.getDay()
            var yobi= new Array("日","月","火","水","木","金","土")

            this.date = month + "/" + day + "/ (" + yobi[week] + ") - " + hour + ":" + min + ":" + sec
        }
    },
    created() {
        this.getDate()
        setInterval(() => this.getDate(), 1000);
    },
}
</script>
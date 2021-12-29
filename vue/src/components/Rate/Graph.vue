<script>
import { Doughnut, mixins } from 'vue-chartjs';

export default {
    extends: Doughnut,
    mixins: [mixins.reactiveData],
    name: 'chart',
    props: {
        rate: []
    },
    data() {
        return {
            options: {
                rotation: -0.5 * Math.PI,
                cutoutPercentage: 65,
                title: {
                    display: false,
                    text: 'ALL TASK',
                    position: 'bottom',
                },
                legend: {
                    display: false,
                    position: 'bottom',
                    onClick: null,
                },
            }
        }
    },
    mounted() {
        this.render()
    },
    methods: {
        render(){
            this.chartData = {
                labels: ['Today', 'Done', 'Not Yet'],
                datasets: [
                    {
                        data: [this.rate.today, this.rate.achievement, this.rate.not],
                        backgroundColor: ['green', 'blue', 'grey'],
                    },
                ]
            }
        }
    },
    watch: {
        rate(){
            this.render()
        }
    }
}
</script>
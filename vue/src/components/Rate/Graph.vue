<script>
import { Doughnut } from 'vue-chartjs';

export default {
    extends: Doughnut,
    name: 'chart',
    props: {
        done: Number,
        not: Number,
        today: Number,
    },
    data () {
        return {
            data: {
                labels: ['Today', 'Done', 'Not Yet'],
                datasets: [
                    {
                        data: [this.today, this.done, this.not],
                        backgroundColor: ['green', 'blue', 'grey'],
                    },
                ]
            },
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
    mounted () {
        this.renderChart(this.data, this.options)
    }
}
</script>
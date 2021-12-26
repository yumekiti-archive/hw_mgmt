<script>
import { Doughnut } from 'vue-chartjs';

export default {
    extends: Doughnut,
    name: 'chart',
    props: {
        done: Number,
        not: Number,
    },
    data () {
        return {
            data: {
                labels: ['Done', 'Not Yet'],
                datasets: [
                    {
                        data: [this.done, this.not],
                        backgroundColor: ['blue', 'grey'],
                        borderWidth: 10,
                    },
                ]
            },
            options: {
                cutoutPercentage: 65,
                title: {
                    display: true,
                    text: 'ALL TASK',
                    position: 'bottom',
                },
                legend: {
                    position: 'bottom',
                    onClick: () => {return false},
                },
            }
        }
    },
    mounted () {
        this.renderChart(this.data, this.options)
    }
}
</script>
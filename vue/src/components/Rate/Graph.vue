<script>
import { Doughnut } from 'vue-chartjs';

export default {
    extends: Doughnut,
    name: 'chart',
    data () {
        return {
            data: {
                labels: ['Done', 'Not Yet'],
                datasets: [
                    {
                        data: [90, 10],
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
                },
            }
        }
    },
    mounted () {
        this.renderChart(this.data, this.options)
    }
}
</script>
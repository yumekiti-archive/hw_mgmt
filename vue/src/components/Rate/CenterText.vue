<template>
    <div>
        <p class="center-text">
            <v-icon class="text-xl-h1 text-md-h3 text-sm-h6">mdi-calendar-check</v-icon><br>
            <span class="text-xl-h1 text-md-h3 text-sm-h6">{{this.rate.achievement}} / {{this.rate.all}}</span>
        </p>
    </div>
</template>
<script>
export default {
    name: 'CenterText',
    props: {
        rate: []
    }
}
</script>
<style scoped>
.center-text {
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
    transform: translateY(-50%); 
}
</style>
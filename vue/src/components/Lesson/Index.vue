<template>
    <div>
        <p>{{this.lesson}}</p>
    </div>
</template>
<script>
export default {
    name: 'Lesson',
    props: {
        lesson: [],
    }
}
</script>
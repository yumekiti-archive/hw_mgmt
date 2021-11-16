<template>
    <div class="Test">
        <li v-for="(todo, key) in todos" :key="key">
            {{ todo.text }}
        </li>
    </div>
</template>

<script>
    export default {
        name: 'Test',
        data:function () {
            return {
                todos: [
                    { text: 'Learn JavaScript' },
                    { text: 'Learn Vue' },
                    { text: 'Build something awesome' }
                ]
            }
        }
    }
</script>
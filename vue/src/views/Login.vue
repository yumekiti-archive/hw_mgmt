<template>
    <div>
        <form>
            <h1>test</h1>
            <input placeholder="Username" type="text"/>
            <input placeholder="Password" type="password"/>
            <button class="btn">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            user: {}
        }
    },
    methods: {
        doLogin() {
            this.$store.dispatch("auth", {
                userId: this.user.userId,
                userToken: 'dummy token'
            });
            this.$router.push(this.$route.query.redirect);
        }
    }
}
</script>

<style scoped>
article, 
aside, 
details, 
figcaption, 
figure, 
footer, 
header, 
hgroup, 
nav, 

section {
    display: block;
}

html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}

input:focus, 
textarea:focus {
    outline: none;
}

label, 
select, 
button, 
input[type="submit"], 
input[type="radio"], 
input[type="checkbox"] 
input[type="button"] {
    cursor: pointer;
}

a, 
a:visited, 
a:active {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}


* {
    font-size:100%;
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

* {
    font-family:"Helvetica Neue", Helvetica, Arial;
}

form {
    background:#fff;
    border-radius:6px;
    padding:20px;
    padding-top:30px;
    width:300px;
    margin:50px auto;
    box-shadow:10px 10px 0px rgba(0,0,0,.1);
}

h1 {
    text-align:center;
    font-size:1.4em;
    font-weight:700;
    color:#e9e9e9;
    margin-bottom:24px;
}

input {
    width:100%;
    background:#f5f5f5;
    border:0;
    padding:20px;
    border-radius:6px;
    margin-bottom:10px;
    border:1px solid #eee;
}

.btn {
    position:relative;
    width:100%;
    padding:20px;
    border-radius:6px;
    border:0;
    background:#4EB5DB;
    font-size:1.2em;
    color:#fff;
    text-shadow:3px 3px 0px rgba(0,0,0,.1);
    box-shadow:3px 3px 0px #029FDD;
}
</style>
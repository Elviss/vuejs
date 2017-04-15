<script>
    export default {

    }
</script>

<template>
    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            </thead>

            <tbody>

            <tr v-for="user in users">
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<style scoped="">

</style>
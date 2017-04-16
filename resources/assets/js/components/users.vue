<script>
    import {orderBy} from 'lodash'

    export default {
        props: ['users'],
        data () {
            return {
                list: [],
                sortProperty: 'name',
                sortDirection: 'asc'
            }
        },
        methods: {
            sort(ev, property) {
                ev.preventDefault();

                this.sortProperty = property;

                if(this.sortDirection == 'asc') {
                    this.sortDirection = 'desc'
                } else {
                    this.sortDirection = 'asc'
                }
            }
        },
        computed: {
            orderedUsers: function () {
                return _.orderBy(this.list, this.sortProperty, this.sortDirection)
            }
        },
        mounted() {
            this.list = JSON.parse(this.users)
        },

    }
</script>

<template>
    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th><a href="#" @click="sort($event, 'name')">Nome</a></th>
                <th><a href="#" @click="sort($event, 'email')">Email</a></th>
            </tr>
            </thead>

            <tbody>

            <tr v-for="user in orderedUsers">
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<style scoped="">

</style>
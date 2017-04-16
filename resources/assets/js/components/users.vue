<script>
    import {orderBy} from 'lodash'

    export default {
        props: ['users'],
        data () {
            return {
                list: [],
                sortProperty: 'name',
                sortDirection: 'asc',
                filterTerm: ''
            }
        },
        methods: {
            sortBy(ev, property) {
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
            },
            filteredUsers: function () {

                return this.list.filter(function (user) {
                    return user.name.indexOf(this.filterTerm) !== -1
                });

            },
            filteredAndOrdered: function () {
                const result = _.orderBy(this.list, this.sortProperty, this.sortDirection);

                if (_.isEmpty(this.filterTerm)) {
                    return result;
                }

                return _.filter(result, list => list.name.indexOf(this.filterTerm) >= 0);
            }
        },
        mounted() {
            this.list = JSON.parse(this.users)
        },

    }
</script>

<template>
    <div>

        <div class="well">
            <input type="text" class="form-control" placeholder="Filtrar a lista abaixo" v-model="filterTerm">
        </div>

        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th><a href="#" @click="sortBy($event, 'name')">Nome</a></th>
                <th><a href="#" @click="sortBy($event, 'email')">Email</a></th>
            </tr>
            </thead>

            <tbody>

            <tr v-for="user in filteredAndOrdered">
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<style scoped="">

</style>
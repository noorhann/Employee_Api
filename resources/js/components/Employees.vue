<template>
    <div class="justify-content-center">
        <div class="row justify-content-center">
            <div class="card mt-5 " >
                <div class="card-body ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Postion</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr v-for="employee in employees" :key="employee.id">
                                
                                <th scope="row">#{{ employee.id }}</th>
                                <td>{{ employee.name }}</td>
                                <td>{{ employee.email }}</td>
                                <td>{{ employee.address }}</td>
                                <td>{{ employee.postion }}</td>
                                <td>
                                    <router-link :to="'/employee/'+employee.id" class="btn btn-success">
                                        Details
                                    </router-link>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <nav>
            <ul class="pagination justify-content-center mt-5">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="getEmployees(pagination.prev_page_url)">Previous</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">{{ pagination.current_page }} of {{ pagination.last_page }}</a>
                </li>
                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="getEmployees(pagination.next_page_url)">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                employees: [],
                pagination: {}
            };
        },

        created() {
            this.getEmployees();
        },

        methods: {
            getEmployees(api_url) {

                let vm = this;
                api_url = api_url || '/api/employee';
                fetch(api_url)
                    .then(response => response.json())
                    .then(response => {
                        this.employees = response.data;
                        vm.paginator(response.meta, response.links);

                    })
                    .catch(err => console.log(err));
            },

            paginator(meta, links){

                this.pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };
            },
        }
    };
</script>
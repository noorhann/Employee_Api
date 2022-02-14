<template>
    <div class="page-breadcrumb bg-white">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h1>Employee Profile </h1>
            </div>

            <div class="card-body">
                <h5 class="card-title">Name: {{employee.name}} </h5>
                <h6 >Email: {{employee.email}} </h6>
                <h6>Birthdate: {{employee.birthdate}} </h6>
                <h6>postion: {{employee.postion}} </h6>
                <h6>department: {{employee.department}} </h6>
                <h6>phone: {{employee.phone}} </h6>
                <h6>address: {{employee.address}} </h6>
                <h6>gender: {{employee.gender}} </h6>
                <h6>nationality: {{employee.nationality}} </h6>
                <h6>marital-Status: {{employee.marital_Status}} </h6>
                <h6>religion: {{employee.religion}} </h6>
                <h6>Bank-name: {{employee.Bank_name}} </h6>
                <h6>Bank_accountNo: {{employee.Bank_accountNo}} </h6>
                <h6>Salary: {{employee.salary}} </h6>

                <br>

                <router-link :to="'/employee'" class="btn btn-success ">
                    Back
                </router-link> 
            </div>

            <div class="card-footer text-muted"></div>
        </div>
    </div>

</template>

<script>

    export default {

        data(){
            return {
                employee:[]
            };
        },

        created() {
            this.getEmployee();
        },

        methods:{

            getEmployee(api_url)
            {
                api_url = api_url || '/api/employee/'+this.$route.params.id;

                fetch(api_url)
                    .then(response => response.json())
                    .then(response => {
                        this.employee = response.data;

                    })
                    .catch(err => console.log(err));
            },
        }
    };
</script>


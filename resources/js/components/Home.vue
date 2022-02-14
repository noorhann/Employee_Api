<template>
    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
            <div class="collapse navbar-collapse">
                <div class="navbar-nav" style=" padding-left:30px;">
                    <router-link to="/Employee" class="nav-item nav-link">Employees</router-link>
                </div>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>

<script>

    export default {}

</script>
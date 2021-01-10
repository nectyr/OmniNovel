<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            UserData: []
        };
    },
    mounted() {
        axios.get("/user")
            .then(response => {
                this.UserData = response.data.results
            })
            .catch(err => {
                // Manage the state of the application if the request
                // has failed
            })
    }
};
</script>
